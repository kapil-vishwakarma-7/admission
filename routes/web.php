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
    return view('index');
});
Route::resource('institute','InstituteController');
Route::resource('courses','CourseController');
Route::resource('admission','AdmissionController');
Route::resource('enquiry','EnquiryController');
Route::resource('feesmaster','FeesMasterController');
Route::post('searchstudent','FeesMasterController@searchStudent')->name('searchstudent');

Route::get('enquairyview','EnquiryController@showEnquery');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('feespay',function(){
	$res=NULL;
	return view('fees_pay',['res'=>$res]);
});

Route::get('getfeemaster','FeesMasterController@getFeeMaster');
