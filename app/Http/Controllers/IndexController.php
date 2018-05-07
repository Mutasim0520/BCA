<?php

namespace App\Http\Controllers;
use App\Administration as Administration;
use App\Committee;
use App\Honor as Honor;
use App\Broadcast as News;
use App\Broadcasts_image as News_image;
use App\Event as Events;
use App\Events_image as Events_image;

use Illuminate\Http\Request;
use App\Student as Student_form;
use Auth;
use App\Notice as Notice;
use Session;
use App\User as User;

class IndexController extends Controller
{
    public function downloadFile(Request $request){
        $file_path = public_path() .'/uploads/files/'. $request->filename;
        if (file_exists($file_path))
        {
            // Send Download
            return response()->download($file_path);
        }
        else
        {
            // Error
            exit('Requested file does not exist on our server!');
        }
    }

    public function activateUser(Request $request){
        $user = User::find(decrypt($request->id));
        $user ->status = 1;
        $user->save();
        $login = Auth::loginUsingId($user->id);
        if($login){
            return redirect('/');
        }
    }

    public function checkEmail(Request $request){
        $check = sizeof(User::where(['email' => $request->email])->get());
        if ($check>0) $check = "false";
        else $check = "true";
        return $check;
    }

    public function showIndex(){
        return view('user.index');
    }

    public function showSponsorship(){
        return view('user.sponsorship');
    }

    public function showTravelSupport(){
        return view('user.travelSupport');
    }

    public function showTravelInfo(){
        return view('user.TravelInfo');
    }

    public function showVisaApplication(){
        return view('user.visaApplication');
    }

    public function showHistory(){
        return view('user.history');
    }

    public function showCommittee(Request $request){
        $members = Committee::where('committee',$request->name)->paginate(6);
        return view('user.showCommitteeMembers',['members'=>$members,'committee' => $request->name]);
    }

    public function showNews(){
        $news = News::with('broadcasts_image')->orderBy('id','DESC')->paginate(6);
        return view('user.news',['news' => $news]);
    }

    public function showNotice(Request $request){
        $notice = Notice::orderBy('id','DESC')->get();
        return view('user.notice',['notice' => $notice]);
    }

    public function showNewsDetails(Request $request){
        $news = News::with('broadcasts_image')->find($request->id);
        return view('user.newsDetail',['news' => $news]);
    }

    public function showEventDetails(Request $request){
        $event = Events::with('events_image')->find($request->id);
        //return $event;
        return view('user.eventDetail',['event' => $event]);
    }

    public function showPrograms(){
        return view('user.programs');
    }

    public function showContact(Request $request){
        return view('user.contact');
    }



    public function showHallAdministration(){
        $administration = Administration::where('status','current')->paginate(8);
        return view('user.hallAdministration',['administration'=>$administration]);
    }

    public function showRoleOfHonors(){
        $honor = Honor::orderBy('priority','ASC')->paginate(8);
        return view('user.roleOfHonors',['honors' => $honor]);
    }

    public function showEvents(){
        $events = Events::with('events_image')->orderBy('id','DESC')->paginate(6);
        return view('user.events',['events' => $events]);
    }
    

}
