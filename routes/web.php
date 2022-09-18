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

Route::get('/', function () {
    return view('index')->with('status');
});

Route::get('/payment', function(){
    return view('payment');
});

Route::get('/lessons', function(){
    return view('lessons');
});

Route::get('/live_classes', function(){
    return view('live_classes');
});

Route::get('/in_month', function(){
    return view('in_month');
});

Route::get('/free_sessions', function(){
    return view('free_sessions');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/view_lesson', function(){
    return view('view_lesson');
});

Route::get('/dashboard', 'AdminController@CheckAdminAuthLogin');
Route::get('/logout', 'StudentController@logOutStudent');
Route::get('/app', 'StudentController@showProfilePage');

Route::post('/savestudent', 'StudentController@regiserStudentDetails');
Route::post('/login', 'StudentController@loginPortal');
Route::get('/student', 'StudentManageController@checkAuthCredential');
Route::get('/lessons', 'LessonManageController@checkAuthCredentials');
Route::get('/live_lessons', 'LiveClassesManageController@checkAuthCredentials');
