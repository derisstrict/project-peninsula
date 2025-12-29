<?php

namespace App\Http\Controllers;

use App\Models\FotoVideo;
use App\Models\Spot;
use App\Models\ThingsToDo;

class FotoVideoController extends Controller
{
    public function index()
{
    $galleries = FotoVideo::latest()->get();

   
    $exploreBg = $galleries
        ->where('tipe_media', 'foto')
        ->first();

    return view('home', [
        'galleries'   => $galleries,   
        'exploreBg'   => $exploreBg,   
        'spots'       => Spot::all(),
        'thingstodos' => ThingsToDo::all(),
    ]);
}

}
