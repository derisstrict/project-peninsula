<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/events/events-detail', function () {
    return view('events-detail');
});

Route::get('/blogs/blogs-detail', function () {
    return view('blogs-detail');
});

Route::get('/report', function () {
    return view('report');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
