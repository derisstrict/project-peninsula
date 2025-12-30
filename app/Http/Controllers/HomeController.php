<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Spot;
use App\Models\ThingsToDo;

class HomeController extends Controller
{
    public function index()
{
    $galleries = Galeri::latest()->get();

    return view('home', [
        'galleries'   => $galleries, 
        'spots'       => Spot::all(),
        'thingstodos' => ThingsToDo::all(),
    ]);
}

}
