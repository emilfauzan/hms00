<?php

use App\Models\Room;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Novotel Pulomas',
        'pagetitle' => 'Novotel Pulomas',
    ]);
});

Route::get('/rooms', function () {
    return view('rooms', [
        'title' => 'Rooms',
        'pagetitle' => 'Rooms',
        'rooms' => Room::all()
    ]);
});

Route::get('/rooms/{room:slug}', function (Room $room) {

    // $room = Room::find($id); to find room varible

    return view('room', [
        'title' => 'Room Types',
        'pagetitle' => 'Rooms Types',
        'rooms' => $room
    ]);
});

Route::get('/log', function () {
    return view('log', [
        'title' => 'Activity Log',
        'pagetitle' => 'Novotel Pulomas - Activity Log',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About Us',
        'pagetitle' => 'Novotel Pulomas - About Us'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Us',
        'pagetitle' => 'Novotel Pulomas - Contact'
    ]);
});

Route::get('/register', function () {
    return view('register', [
        'title' => 'Novotel Pulomas - Sign Up',
        'pagetitle' => 'Novotel Pulomas - Sign Up'
    ]);
});

Route::get('/login', function () {
    return view('login', [
        'title' => 'Novotel Pulomas - Login',
        'pagetitle' => 'Novotel Pulomas - Login'
    ]);
});
