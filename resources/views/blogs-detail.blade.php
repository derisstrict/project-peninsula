@extends('layout.layout')

@section('title', 'The Peninsula Island')

@section('content')
<button onclick="history.back()" class="btn-primary p-3 w-fit cursor-pointer">
    <svg width="16px" height="16px" class="rotate-225" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path d="M7 17L17 7M17 7H8M17 7V16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <p class="text-sm">{{ __('common.back') }}</p> 
</button>
<div class="flex flex-col gap-2 mt-5"> 
    <img class="rounded-xl self-center w-500 h-150 object-cover" src={{ asset('storage/' . $blogs->gambar_blog) }} alt="{{ $blogs->alt_gambar }}">
    <p class="text-4xl font-semibold mt-5">{{ $blogs->judul_blog }}</p>
    <p> {{ $blogs->created_at->diffForHumans() }} </p>
    <div class="bg-color-accent/25 outline-2 outline-color-accent/50 w-fit rounded-lg px-2 text-sm">Other</div>
    <div class="prose prose-zinc prose-xl prose-strong:font-medium dark:prose-invert mt-6 !max-w-none">
        {!! $blogs->isi_blog !!}
    </div>
</div>
<div class="flex flex-col mt-15 gap-5">
    <p class="text-4xl font-semibold">{!! __('blogs_detail.title', ['accent' => '<span class="text-color-accent"> '. __('blogs_detail.title_accent') .' </span>']) !!}</p>
    <div class="grid grid-cols-3">
        @foreach ($more_articles as $more_article)
            <x-blogs-card-grid href="/blogs/{{ $more_article->id }}/{{ $more_article->slug}}" 
            title="{{ $more_article->judul_blog }}" 
            date="{{ $more_article->created_at->diffForHumans() }}" 
            image="{{ asset('storage/' . $more_article->gambar_blog) }}"
            alt="{{ $more_article->alt_gambar }}"></x-blogs-card-grid>
        @endforeach
    </div>
    <div class="flex justify-center">
        <a href="/blogs" class="btn-primary p-3">
            <p class="text-sm">{{ __('blogs_detail.more') }}</p>
            <svg width="16px" height="16px" class="rotate-45" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M7 17L17 7M17 7H8M17 7V16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
</div>
@endsection
