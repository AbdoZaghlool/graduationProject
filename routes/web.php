<?php
use App\Http\Controllers\pagesController;
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

Route::get('/', 'pagesController@index');
Route::get('/centers', 'pagesController@centers');
Route::get('/course', 'pagesController@courses');
Route::get('/diploma', 'pagesController@diploma');
Route::get('/certification', 'pagesController@certification');
Route::get('/changePhoto', 'pagesController@photo');
Route::get('/changeInfo', 'pagesController@info');
Route::get('/changePrivacy', 'pagesController@privacy');
Route::resource('course', 'courseController');
Route::resource('diploma', 'diplomaController');
Route::resource('certification', 'certificationController');
Auth::routes();

Route::get('/dashboard', 'dashboardController@index')->name('dashboard');

Route::get("institute/login", "InstituteController@login")->name("institute.login");
Route::post("institute/attempt", "InstituteController@attempt")->name("institute.attempt");

Route::get("institute/post/create", "PostController@create")->name("institutes.post.create");
