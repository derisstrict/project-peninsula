<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function searchRequest (Request $request) {
        $query = Blog::query();

        if ($search = $request->search) {
            $query->where('judul_blog', 'like', "%$search%");
        }

        $blogs = $query->paginate(10);
        return view('blogs', compact('blogs', 'search'));
    }

    public function findIDSlug ($id, $slug) {
        $blogs = Blog::where('slug', $slug)->where('id', $id)->firstOrFail();
        $more_articles = Blog::where('slug', '!=', $slug)->latest()->take(3)->get();
        return view('blogs-detail', compact('blogs', 'more_articles'));
    }
}
