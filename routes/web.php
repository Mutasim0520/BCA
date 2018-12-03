<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','IndexController@showIndex')->name('user.index');
Route::get('/travel-info','IndexController@showTravelInfo')->name('user.travel_info');
Route::get('/history','IndexController@showHistory')->name('user.history');
Route::get('/sponsorship','IndexController@showSponsorship')->name('user.sponsorship');
Route::get('/visa-application','IndexController@showVisaApplication')->name('user.visa_application');
Route::get('/travel-support','IndexController@showTravelSupport')->name('user.travel_support');
Route::get('/committee/{name}','IndexController@showCommittee');
Route::get('/programs','IndexController@showPrograms')->name('user.program');

Route::get('/hall/administration','IndexController@showHallAdministration')->name('user.hall.administration');
Route::get('/hall/role/of/honors','IndexController@showRoleOfHonors')->name('user.role.honors');
Route::get('/events','IndexController@showEvents')->name('user.events');
Route::get('/news','IndexController@showNews')->name('user.news');
Route::get('/notice','IndexController@showNotice')->name('user.notice');
Route::get('/contact','IndexController@showContact')->name('user.contact');
Route::get('/detail/news/{id}','IndexController@showNewsDetails');
Route::get('/detail/event/{id}','IndexController@showEventDetails');
Route::get('/detail/notice/{id}','IndexController@showNoticeDetails');
Route::get('/check/email','IndexController@checkEmail');
Route::get('/activate/{id}','IndexController@activateUser');

Route::group(['middleware' => 'auth'], function (){
    Route::get('/student-form','IndexController@showStudentsForm')->name('user.student.form');
    Route::post('/student-form','IndexController@storeStudentForm')->name('user.submit.student.form');
    Route::post('/edti/student-form/{id}','IndexController@editStudentForm');
});

Route::get('/download','IndexController@downloadFile')->name('download');

Auth::routes();
Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::group(['prefix' => 'admin',  'middleware' => 'auth:admin'], function () {
    Route::post('/upload/file','AdminController@uploadFile')->name('admin.uploadFile');
    Route::get('/dashboard', 'AdminController@ShowDashboard')->name('admin.dashboard');

    Route::get('/add/committee-member', 'AdminController@showAddCommitteeMemberForm')->name('admin.add.committee');
    Route::post('/add/committee-member', 'AdminController@storeAddCommitteeMemberForm')->name('admin.store.committeeMember');
    Route::get('/edit/committee-member/{id}','AdminController@showEditCommitteeMemberForm');
    Route::post('/edit/committee-member/{id}','AdminController@editCommitteeMember');
    Route::get('/delete/committee-member/{id}','AdminController@deleteCommitteeMember');

    Route::get('/add/news','AdminController@showAddnewsForm')->name('admin.news.add');
    Route::post('/add/news','AdminController@storeAddnewsForm')->name('admin.store.news');
    Route::get('/edit/news/{id}','AdminController@showEditNewsForm');
    Route::post('/edit/news/{id}','AdminController@EditNewsForm');
    Route::get('/delete/news/{id}','AdminController@deletetNews');

    Route::get('/add/notice','AdminController@showAddNoticeForm')->name('admin.notice.add');
    Route::post('/add/notice','AdminController@storeAddNoticeForm')->name('admin.store.notice');
    Route::get('/edit/notice/{id}','AdminController@showEditNoticeForm');
    Route::post('/edit/notice/{id}','AdminController@EditNoticeForm');
    Route::get('/delete/notice/{id}','AdminController@deletetNotice');
    Route::post('/logout','Auth\AdminLoginController@logout');

});




Route::group(['middleware'=>'auth:admin'],function (){
});