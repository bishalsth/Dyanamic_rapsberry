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

Route::get('/logout','AdminController@logout');
// admin section Start ends


// INSERT INTO `jobs`(`id`, 
// `v_name`,
//  `description`, `
//  job_spec`, 
//  `job_category`, 
//  `total_req`,
//   `educational_qal`,
//    `experience`, 
//    `type`,
//     `gender`,
//      `job_type`, 
//      `salary`, 
//      `created_at`, 
//      `updated_at`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14])