<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function searchRequest (Request $request) {
        $query = Blog::query();

        if ($search = $request->search) {
            $query->where('judul_blog', 'like', "%$search%");
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

        $blogs = $query->paginate($page);
        return view('blogs', compact('blogs', 'search', 'page'));
    }

    public function findIDSlug ($id, $slug) {
        $blogs = Blog::where('slug', $slug)->where('id', $id)->firstOrFail();
        $more_articles = Blog::where('slug', '!=', $slug)->latest()->take(3)->get();
        return view('blogs-detail', compact('blogs', 'more_articles'));
    }
}
