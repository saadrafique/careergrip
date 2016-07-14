<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('index','AsifController@index');
Route::get('index2','AsifController@index2');
Route::get('index3','AsifController@index3');
Route::get('jssignup','AsifController@jssignup');
Route::get('emsignup','AsifController@emsignup');

Route::get('emprofile','AsifController@emprofile');
Route::get('jobpost','AsifController@jobpost');

Route::get('asif/login', function() {
  return View::make('login1');
});
Route::get('login1','AsifController@login1');
Route::get('ajax','AsifController@hello');

Route::get('login','AsifController@login');
Route::post('asif/login','AsifController@login1');
Route::get('jsprofile','AsifController@jsprofile');
Route::get('jobseekers','AsifController@jobseekers');
Route::get('jobs','AsifController@jobs');
Route::post('jstore','DesignController@jstore');
Route::post('estore','DesignController@estore');
Route::get('jsprofile/{id}','AsifController@jsprofile');
Route::post('queries','SearchController@search');



Route::get('emprofile/{id}','DesignController@emprofile');
Route::post('emprofile/empstore','DesignController@store'); 
Route::get('show/{id}','DesignController@show');











