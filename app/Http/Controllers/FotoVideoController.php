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

    $$galleries = $galleries
        ->pluck('url_media')
        ->flatMap(function ($item) {
            if (is_array($item)) {
                return $item;
            }

            if (is_string($item) && str_starts_with($item, '[')) {
                return json_decode($item, true) ?? [];
            }

            return [$item];
        })
        ->map(fn ($img) => asset('storage/' . $img))
        ->values();

    return view('home', [
        'galleries'   => $galleries,
        'spots'       => Spot::all(),
        'thingstodos' => ThingsToDo::all(),
    ]);
}

}