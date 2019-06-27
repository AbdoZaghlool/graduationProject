<?php
Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('institute')->user();
    //dd($users);
    return view('dashboard');
})->name('home');