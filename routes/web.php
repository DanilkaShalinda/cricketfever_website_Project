<?php

use App\Http\Controllers\aboutus;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\customization_controller;
use App\Http\Controllers\fileuploadcontroller;
use App\Http\Controllers\homepage_postcontroller;
use App\Http\Controllers\newslinepost;
use App\Http\Controllers\web_contactus;
use App\Models\customization;
use Illuminate\Support\Facades\Route;

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

// +++++++++++website Routes+++++++++++++++

Route::get('/', function () {
    return view('website/index');
});
Route::get('/aboutus', function () {
    return view('website/aboutus');
});
Route::get('/news',function(){
    return view('website/newsline');
});
Route::get('/contactus', function () {
    return view('website/contact_us');
});
Route::get('/aboutus', function () {
    return view('website/aboutus');
});











// ++++++++admin++++++++
Route::get('/admin',function(){
    return view('admin/admin');
});
Route::get('/createpost',function(){
    return view('admin/createpost');
});
Route::get('/viewallposts',function(){
    return view('admin/viewallposts');
});

Route::get('/editpost',function(){
    return view('admin/editpost');
});
Route::get('/createseries',function(){
    return view('admin/createseries');
});

Route::get('/viewallseries',function(){
    return view('admin/viewallseries');
});

Route::get('/editpost',function(){
    return view('admin/editseries');
});
Route::get('/createseries',function(){
    return view('admin/createseries');
});
Route::get('/contactadmin',function(){
    return view('admin/contact_admin');
});
Route::get('/aboutusadmin',function(){
    return view('admin/aboutus');
});
Route::get('/customize', function () {
    return view('admin.customizewebsite');
});

















// ++++++++ function Routes++++++++++++++
// post operations++++++++++++++++++++++++++++++++++++++++++++++++
Route::post('/postcreated',[admincontroller::class,'createpost']);

Route::get('/viewallposts',[admincontroller::class,'viewallpost']);

Route::get('/deletepost/{id}',[admincontroller::class,'deletepost']);

Route::get('/editpost/{id}',[admincontroller::class,'editpost']);

Route::post('/updatepost',[admincontroller::class,'update_post']);

// series operations+++++++++++++++++++++++++++++++++++++++++++++++++

Route::post('/seriescreated',[admincontroller::class,'createseries']);

Route::get('/viewallseries',[admincontroller::class,'viewallseries']);

Route::get('/deletseries/{id}',[admincontroller::class,'deleteseries']);

Route::get('/editseries/{id}',[admincontroller::class,'editseries']);

Route::post('/updateseries',[admincontroller::class,'update_series']);

//  admin message box (admin side) +++++++++++++++++++++++++++++++++++++++++
Route::get('/contactadmin',[admincontroller::class,'contact_admin']);

Route::get('/deletemessage/{id}',[admincontroller::class,'delete_message']);

// message send routes(user side)++++++++++++++++++++++++++++++++++++++++++++

Route::post('/sendmessage',[web_contactus::class,'contactus']);

Route::get('/aboutus',[aboutus::class,'useraboutus']);

// about us routes (admin side)++++++++++++++++++++++++++++++++++++++++++++

Route::post('/saveaboutus',[aboutus::class,'update_aboutus_admin']);

Route::get('/showadminaboutus',[aboutus::class,'showaboutus']);

//  customization routes +++++++++++++++++++++++++++++++++++++++++++++++++++++++

Route::post('/saveacustomization',[customization_controller::class,'update_customize']);

Route::get('/customize',[customization_controller::class,'showcustomize']);

// home page+++++ post routes+++++++++++++++++++++++++++++++++++++++++++++++++++++++

Route::get('/',[homepage_postcontroller::class,'homepage_post_display']);

Route::get('/news',[newslinepost::class,'newslinepost_function']);

// file upload function +++++++++++++++++++++++++++++++++++++++++++++++
// Route::post('/postcreated',[fileuploadcontroller::class,'fileupload']);
