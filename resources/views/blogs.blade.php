<?php

use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

Carbon::setLocale(app()->getLocale());

?>

@extends('layout.layout')

@section('title', 'The Peninsula Island')

@section('content')
<div class="background-radial-blur -translate-x-100 -translate-y-25"></div>
<p class="text-5xl text-center font-semibold">{!! __('blogs.title', ['accent' => '<span class="text-lime-600"> '. __('blogs.title_accent') .' </span>']) !!}</p>
<div class="mt-20 ml-5">
<x-search-bar accent="text-lime-600"></x-search-bar>
</div>
<div class="grid grid-cols-1 mt-10 gap-4">
    @foreach ($blogs as $blog)
        <x-blogs-card href="/blogs/{{ $blog['slug'] }}" 
        date="{{ $blog->created_at->diffForHumans() }}" 
        image="{{ asset('storage/' . $blog->gambar_blog) }}" 
        title="{{ $blog->judul_blog }}">
        {{Str::limit(strip_tags($blog->isi_blog), 150, '...')}}
        </x-blogs-card> 
    @endforeach
</div>
@endsection
