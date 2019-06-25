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
Route::get('/changePhoto', 'userController@photo');
Route::get('/changeInfo', 'userController@info');
Route::get('/changePrivacy', 'userController@privacy');
Route::resource('course', 'courseController');
Route::resource('diploma', 'diplomaController');
Route::resource('certification', 'certificationController');
Route::post('/updateInfo','userController@updateInfo');
Route::post('/updateAccount','userController@updateAccount');
Route::post('/updatePhoto','userController@updatePhoto');
Auth::routes();
Route::get('/dashboard', 'dashboardController@index')->name('dashboard');
