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
Route::get('/centers', 'pagesController@centers');
Route::get('/centers/profile', 'pagesController@profile');
Route::get('/search', 'pagesController@search');


Route::group(['prefix' => 'institute'], function () {
    Route::get('/login', 'InstituteAuth\LoginController@showLoginForm')->name('institute.login');
    Route::post('/login', 'InstituteAuth\LoginController@login')->name('institutes.login');
    Route::get('/logout', 'InstituteAuth\LoginController@logout')->name('institute.logout');
    Route::get('/register', 'InstituteAuth\RegisterController@showRegistrationForm')->name('institute.register');
    Route::post('/register', 'InstituteAuth\RegisterController@register');

  });
