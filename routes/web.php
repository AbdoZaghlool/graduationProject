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
Route::get('/course', 'pagesController@courses');
Route::get('/diploma', 'pagesController@diploma');
Route::get('/certification', 'pagesController@certification');
Route::get('/changePhoto', 'pagesController@photo');
Route::get('/changeInfo', 'pagesController@info');
Route::get('/changePrivacy', 'pagesController@privacy');
