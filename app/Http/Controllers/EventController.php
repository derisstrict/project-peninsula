<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    public function index (Request $request) {
        $query = Event::query();

        $onGoingEvents = collect();
        if(!$search = $request->search){
            $today = now();
            $onGoingEvents = Event::where('tanggal_mulai', '<=', $today)->where('tanggal_selesai', '>=', $today)->get();
        }
        
        if ($search = $request->search) {
            $query->where('judul_event', 'like', "%$search%")
            ->orWhere('harga_tiket', 'like', "%$search%");
        }
        $page = $request->max_result;
        
        if (empty($request->max_result)) {
            $page = Session::get('max_result');
        } else {
            Session::put('max_result', $page);
        }

        if (!Session::has('max_result')) {
            $page = 6;
        }

        $events = $query->paginate($page);

        $today = now();
        $onGoingEvents = Event::where('tanggal_mulai', '<=', $today)->where('tanggal_selesai', '>=', $today)->get();

        return view('events', compact('events', 'search', 'page', 'onGoingEvents'));
    }

    public function findIDSlug ($id, $slug) {
        $events = Event::where('slug', $slug)->where('id', $id)->firstOrFail();
        return view('events-detail', ['event' => $events]);
    }
}
