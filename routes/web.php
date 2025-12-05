<?php

use App\Models\Blog;
use App\Models\Event;
use App\Models\LandingPage;
use App\Models\Spot;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Models\ThingsToDo;

Route::get('/', function () {
    return view('home', ['spots' => Spot::all(), 'landing_page' => LandingPage::find(1),'thingstodos' => ThingsToDo::all()]);
});

Route::get('/blogs', function () {
    return view('blogs', ['blogs' => Blog::all()]);
});

Route::get('/blogs/{slug}', function ($slug) {
    $blogs = Blog::where('slug', $slug)->first();
    return view('blogs-detail', ['blogs' => $blogs]);
});

Route::get('/events', function () {
    return view('events', ['events' => Event::all()]);
});

Route::get('/events/{slug}', function ($slug) {
    $events = Event::where('slug', $slug)->first();
    return view('events-detail', ['event' => $events]);
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

Route::get('/dashboard/events', function () {
    return view('dashboard.events');
});

Route::get('/dashboard/blogs', function () {
    return view('dashboard.blogs');
});

Route::get('lang/{locale}', function ($locale) {
    App::setLocale($locale);
    Session::put('locale', $locale);

    return redirect()->back();
});
