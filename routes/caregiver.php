<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('caregiver')->user();

    //dd($users);

    return view('caregiver.home');
})->name('home');

