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

/*Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/home', 'AdminController@index')->name('admin.home');
});
*/

Route::get('/dashboard', 'dashboardController@index')->name('dashboard');


Route::group(['prefix' => 'institute'], function () {
    Route::get('/login', 'InstituteAuth\LoginController@showLoginForm')->name('login');
    Route::POST('/login', 'InstituteAuth\LoginController@login');
    Route::POST('/logout', 'InstituteAuth\LoginController@logout')->name('logout');
  
    Route::get('/register', 'InstituteAuth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'InstituteAuth\RegisterController@register');
  
    Route::post('/password/email', 'InstituteAuth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.request');
    Route::post('/password/reset', 'InstituteAuth\ResetPasswordController@reset')->name('admin.password.email');
    Route::get('/password/reset', 'InstituteAuth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.reset');
    Route::get('/password/reset/{token}', 'InstituteAuth\ResetPasswordController@showResetForm');
  });
