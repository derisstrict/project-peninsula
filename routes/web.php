<?php

use App\Models\Blog;
use App\Models\Event;
use App\Models\LandingPage;
use App\Models\Spot;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('home', ['spots' => Spot::all(), 'landing_page' => LandingPage::find(1)]);
});

Route::get('/blogs', function () {
    return view('blogs', ['blogs' => Blog::all()]);
});

Route::get('/blogs/{id}/{slug}', function ($id, $slug) {
    $blogs = Blog::where('slug', $slug)->where('id', $id)->firstOrFail();
    $more_articles = Blog::where('slug', '!=', $slug)->latest()->take(3)->get();
    return view('blogs-detail', ['blogs' => $blogs, 'more_articles' => $more_articles]);
});

Route::get('/events', function () {
    return view('events', ['events' => Event::all()]);
});

Route::get('/events/{id}/{slug}', function ($id, $slug) {
    $events = Event::where('slug', $slug)->where('id', $id)->firstOrFail();
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