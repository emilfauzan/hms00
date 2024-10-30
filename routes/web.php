<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'NT Hotel',
        'pagetitle' => 'NT Hotel'
    ]);
});

Route::get('/log', function () {
    return view('log', [
        'title' => 'Activity Log',
        'pagetitle' => 'NT Hotel - Activity Log'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About Us',
        'pagetitle' => 'NT Hotel - About Us'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Us',
        'pagetitle' => 'NT Hotel - Contact'
    ]);
});

Route::get('/credsignup', function () {
    return view('credsignup', [
        'credtitle' => 'Sign Up',
        'pagetitle' => 'NT Hotel - Sign Up'
    ]);
});

Route::get('/credlogin', function () {
    return view('credlogin', [
        'credtitle' => 'Login',
        'pagetitle' => 'NT Hotel - Login'
    ]);
});
