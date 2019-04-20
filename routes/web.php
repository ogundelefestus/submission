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



//homepage route
Route::get('/', function () {
    return view('home.index');
   
});
//students route
Route::get('/students', function () {
    return view('students.students');
});
   
//signup route for post and get request
Route::get('/signup', function () {
    return view('user.signup');
    return view('/signup','UserController@getsignup');
    
});
   
Route::post('/signup', function () {
    return view('user.signup');
    return view('/signup','UserController@postsignup');
  
});

   
//signin route for post and get request

Route::get('/signin', function () {
    return view('user.signin');
});
   
//Route::post('/signup', function () {
    return view('user.signin');
//});
//route for profile page
Route::get('/profile', function () {
    return view('user.profile');
});