<?php

namespace App\Http\Controllers;

use App\Broadcasts_image;
use Illuminate\Http\Request;
use App\Honor as Honors;
use App\Committee as Committee;
use App\Broadcast as News;
use App\Broadcasts_image as News_image;
use App\Event as Events;
use App\Events_image as Events_image;
use App\Notice as Notices;
use App\Student as Students;

use Session;
use Auth;
use File;
use Storage;

class AdminController extends Controller
{

    protected function stringTinker($main_string,$position,$replacement){
        $string_to_be_replaced = substr($main_string,$position);
        $new_string = trim(preg_replace("/$string_to_be_replaced/",$replacement,$main_string));
        return $new_string;
    }

    public function uploadFile(Request $request){
        $file = $request->file_name;
        $fileName = time().$file->getClientOriginalName();
        $file->move(public_path('/uploads/files/'), $fileName);

        $file = Storage::disk('public')->get('company.txt');
        $info = explode(PHP_EOL, Storage::disk('public')->get('company.txt'));
        foreach ($info as $item) {
            if (preg_match("/file_name/", $item)) {
                $replacement = $fileName;
                $new_string = $this->stringTinker($item,10, $replacement);
                $contents = str_replace($item, $new_string, $file);
                Storage::disk('public')->put('company.txt', $contents);
                return redirect()->back();
            }
        }
    }

    public function ShowDashboard(){
        $news = News::with('broadcasts_image')->orderBy('id','DESC')->get();
        $events = Events::with('events_image')->orderBy('id','DESC')->get();
        $notice = Notices::orderBy('id','DESC')->get();
        $administration = Committee::orderBy('id','DESC')->get();

        return view('admin.dashboard',['news' => $news, 'events'=>$events, 'notice'=>$notice, 'administration'=>$administration]);
    }

    public function showAddCommitteeMemberForm(){
        return view('admin.addCommitteeMemberForm');
    }

    public function storeAddCommitteeMemberForm(Request $request){
        $this->validate($request,array(
            'name' => 'required|max:255',
            'designation' => 'required|max:255',
            'university' => 'required|max:255',
            'department' => 'required|max:255',
            'committee' => 'required',
            'priority' => 'required'
        ));
        $Committee = new Committee();
        $Committee->name = $request->name;
        $Committee->department = trim($request->department);
        $Committee->designation = trim($request->designation);
        $Committee->university = trim($request->university);
        $Committee->meta = trim($request->meta_info);
        $Committee->committee = $request->committee;
        $Committee->priority = $request->priority;

        if($request->hasFile('pic')){
            $file = $request->file('pic');
            $fileName = time().$request->file('pic')->getClientOriginalName();
            $file->move(public_path('/uploads/images'), $fileName);
            $Committee->photo = $fileName;
        }
        $Committee->save();
        Session::flash('success_administration_post','Successfully saved');
        return redirect(Route('admin.dashboard'));
    }

    public function showEditCommitteeMemberForm(Request $request){
        $member = Committee::find($request->id);
        return view('admin.edits.editCommitteeMemberForm',['member' => $member]);
    }

    public function editCommitteeMember(Request $request){
        $this->validate($request,array(
            'name' => 'required|max:255',
            'designation' => 'required|max:255',
            'university' => 'required|max:255',
            'department' => 'required|max:255',
            'committee' => 'required'
        ));
        $Committee = Committee::find($request->id);
        $Committee->name = $request->name;
        $Committee->department = trim($request->department);
        $Committee->designation = trim($request->designation);
        $Committee->university = trim($request->university);
        $Committee->meta = trim($request->meta_info);
        $Committee->committee = $request->committee;
        $Committee->priority = $request->priority;

        if($request->hasFile('pic')){
            $file = $request->file('pic');
            $fileName = time().$request->file('pic')->getClientOriginalName();
            $file->move(public_path('/uploads/images'), $fileName);
            $Committee->photo = $fileName;
        }
        $Committee->save();
        Session::flash('success_edit','Successfully Edited');
        return redirect(Route('admin.dashboard'));
    }

    public function deleteCommitteeMember(Request $request){
        $member = Committee::find($request->id);
        $member->delete();
        Session::flash('success_delete','Successfully Deleted');
        return redirect(Route('admin.dashboard'));

    }

    public function showAddnewsForm(){
        return view('admin.addNewsForm');
    }

    public function storeAddnewsForm(Request $request){
        $this->validate($request,array(
            'headline' => 'required|max:500',
            'body' => 'required',
        ));

        $news = new News();
        $news->headline = $request->headline;
        $news->body = $request->body;
        $news->save();

        $news = News::orderBy('id','DESC')->first();
        if($request->hasFile('photos')){
            $counter =1;
            foreach($request->photos as $item){
                $fileName = time().$counter.$item->getClientOriginalName();
                $item->move(public_path('/uploads/news'),$fileName);
                $counter++;
                $image =  new News_image();
                $image->path = $fileName;
                $news->broadcasts_image()->save($image);
            }
        }

        Session::flash('success_news_post','Successfully Saved');
        return redirect(Route('admin.dashboard'));
    }

    public function showEditNewsForm(Request $request){
        $news = News::with('broadcasts_image')->orderBy('id','DESC')->find($request->id);

        return view('admin.edits.EditNewsForm',['news' =>$news]);
    }

    public function EditNewsForm(Request $request){
        $this->validate($request,array(
            'headline' => 'required|max:500',
            'body' => 'required',
        ));

        $news = News::find($request->id);
        $news->headline = $request->headline;
        $news->body = $request->body;
        $news->save();

        $news = News::orderBy('id','DESC')->first();
        if($request->hasFile('photos')){
            $counter =1;
            foreach($request->photos as $item){
                $fileName = time().$counter.$item->getClientOriginalName();
                $item->move(public_path('/uploads/news'),$fileName);
                $counter++;
                $image =  new News_image();
                $image->path = $fileName;
                $news->broadcasts_image()->save($image);
            }
        }

        Session::flash('success_edit','Successfully Edited');
        return redirect(Route('admin.dashboard'));
    }

    public function deletetNews(Request $request){
        $news = News::find($request->id);
        $news->delete();
        Session::flash('success_delete','Successfully Deleted');
        return redirect()->back();

    }

    public function showEditNoticeForm(Request $request){
        $notice = Notices::find($request->id);
        return view('admin.edits.EditNoticeForm',['notice' =>$notice]);
    }

    public function EditNoticeForm(Request $request){
        $this->validate($request,array(
            'headline' => 'required|max:255',
            'body' => 'required',
        ));

        $notice = Notices::find($request->id);
        $notice->headline = trim($request->headline);
        $notice->body = trim($request->body);
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $fileName = time().$request->file('photo')->getClientOriginalName();
            $file->move(public_path('/uploads/notice'), $fileName);
            $notice->photo = $fileName;
        }
        $notice->save();
        Session::flash('success_edit','Successfully Edited');
        return redirect(Route('admin.dashboard'));
    }

    public function deletetNotice(Request $request){
        $notice = Notices::find($request->id);
        $notice->delete();
        Session::flash('success_delete','Successfully Deleted');
        return redirect()->back();

    }

    public function showEditEventsForm(Request $request){
        $event = Events::with('events_image')->find($request->id);
        return view('admin.edits.editEventsForm',['event' =>$event]);
    }

    public function EditEventsForm(Request $request){
        $this->validate($request,array(
            'headline' => 'required|max:500',
            'body' => 'required',
            'date' => 'required'
        ));

        $events = Events::find($request->id);
        $events->headline = $request->headline;
        $events->body = $request->body;
        $events->date = $request->date;
        $events->save();

        $events = Events::orderBy('id','DESC')->first();
        if($request->hasFile('photos')){
            $counter =1;
            foreach($request->photos as $item){
                $fileName = time().$counter.$item->getClientOriginalName();
                $item->move(public_path('/uploads/events'),$fileName);
                $counter++;
                $image =  new Events_image();
                $image->path = $fileName;
                $events->events_image()->save($image);
            }
        }

        Session::flash('success_edit','Successfully Edited');
        return redirect(Route('admin.dashboard'));
    }

    public function deletetEvents(Request $request){
        $event = Events::find($request->id);
        $event->delete();
        Session::flash('success_delete','Successfully Deleted');
        return redirect()->back();

    }

    public function showAddeventsForm(){
        return view('admin.addEventsForm');
    }

    public function storeEvents(Request $request){
        $this->validate($request,array(
            'headline' => 'required|max:500',
            'body' => 'required',
            'date' => 'required'
        ));

        $events = new Events();
        $events->headline = $request->headline;
        $events->body = $request->body;
        $events->date = $request->date;
        $events->save();

        $events = Events::orderBy('id','DESC')->first();
        if($request->hasFile('photos')){
            $counter =1;
            foreach($request->photos as $item){
                $fileName = time().$counter.$item->getClientOriginalName();
                $item->move(public_path('/uploads/events'),$fileName);
                $counter++;
                $image =  new Events_image();
                $image->path = $fileName;
                $events->events_image()->save($image);
            }
        }

        Session::flash('success_post','Successfully Saved');
        return redirect(Route('admin.dashboard'));
    }

    public function showAddNoticeForm(){
        return view('admin.addNoticeForm');
    }

    public function storeAddNoticeForm(Request $request){
        $this->validate($request,array(
            'headline' => 'required|max:255',
            'body' => 'required',
        ));

        $notice = new Notices();
        $notice->headline = trim($request->headline);
        $notice->body = trim($request->body);
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $fileName = time().$request->file('photo')->getClientOriginalName();
            $file->move(public_path('/uploads/notice'), $fileName);
            $notice->photo = $fileName;
        }
        $notice->save();
        Session::flash('success_post','Successfully Saved');
        return redirect(route('admin.dashboard'));
    }


}
