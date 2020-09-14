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

// User View part
Route::get('/','HomeController@index');
Route::get('/about','HomeController@about');

Route::get('/service','HomeController@service');
Route::get('/career','HomeController@career');
Route::get('/contact','HomeController@contact');

Route::get('/counseling','HomeController@counseling');
Route::get('/staff','HomeController@staff');
Route::get('/recruitment','HomeController@recruitment');
Route::get('/employee','HomeController@employee');
Route::get('/candidate','HomeController@candidate');
Route::get('/management','HomeController@management');
Route::get('/carrer-detail/{id}','HomeController@viewJObDetail');
Route::post('/apply-cv','HomeController@applyCv');

// User View Part ends

// admin section Start
Route::match(['get','post'],'/admin','AdminController@login');
Route::get('/admin/dashboard','AdminController@dashboard');
ROute::match(['get','post'],'/admin/add-job','AdminController@addjob');
Route::get('/admin/view-job','AdminController@viewJob');
Route::get('/admin/delete-job/{id}','AdminController@deletJob');
Route::match(['get','post'],'/admin/edit-job/{id}','AdminController@editJob');
Route::get('/admin/view-applied-job','AdminController@viewApplyJob');
Route::get('/admin/delete-applied-job/{id}','AdminController@deletApplyJob');


Route::get('/logout','AdminController@logout');



Route::get('/email','EmailController@index');
Route::post('/email/send','EmailController@send');
