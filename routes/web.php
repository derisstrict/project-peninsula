<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;
use App\Models\Blog;
use App\Models\Event;
use App\Models\GeneralSetting;
use App\Models\LandingPage;
use App\Models\Spot;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Models\ThingsToDo;

Route::get('/', function () {
    return view('home', ['spots' => Spot::all(), 'thingstodos' => ThingsToDo::all()]);
});

Route::get('/blogs', [BlogController::class, 'searchRequest']);

Route::get('/blogs/{id}/{slug}', [BlogController::class, 'findIDSlug']);

// Route::get('/events', function () {
//     $today = now();
//     $onGoingEvents = Event::where('tanggal_mulai', '<=', $today)->where('tanggal_selesai', '>=', $today)->get();
//     return view('events', ['events' => Event::all(), 'onGoingEvents' => $onGoingEvents]);
// });
// Route::get('/events', [EventController::class, 'searchRequest']);

Route::get('/events', [EventController::class, 'index']);


Route::get('/events/{id}/{slug}', [EventController::class, 'findIDSlug']);

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

Route::get('/remses', function () {
    // For debug purposes only :P
    Session::invalidate();

    return redirect()->back();
});