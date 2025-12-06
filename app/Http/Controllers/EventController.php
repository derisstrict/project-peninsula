<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function searchRequest (Request $request) {
        $query = Event::query();

        if ($search = $request->search) {
            $query->where('judul_event', 'like', "%$search%")
            ->orWhere('harga_tiket', 'like', "%$search%");
        }

        $events = $query->paginate(10);
        return view('events', compact('events', 'search'));
    }

    public function findIDSlug ($id, $slug) {
        $events = Event::where('slug', $slug)->where('id', $id)->firstOrFail();
        return view('events-detail', ['event' => $events]);
    }
}
