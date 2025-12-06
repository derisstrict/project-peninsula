<?php

use Carbon\Carbon;

Carbon::setLocale(app()->getLocale());
?>

@extends('layout.layout')

@section('title', 'The Peninsula Island')

@section('content')
<div class="background-radial-blur -translate-x-100 -translate-y-25"></div>
<p class="text-5xl text-center font-semibold">{!! __('events.title', ['accent' => '<span class="text-lime-600"> '. __('events.title_accent') .' </span>']) !!}
</p>
<div class="mt-20 ml-5">
<x-search-bar accent="text-lime-600" search="{{ $search }}"></x-search-bar>
</div>
<a x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" href="/events/events-detail" class="flex bg-lime-600/5 p-8 rounded-lg mt-10 gap-5 w-full items-center hover:bg-lime-600/10 transition-colors">
    <img src="img/placeholder.jpg" alt="event-image" class="w-80 h-60 object-cover rounded-xl">
    <div class="flex flex-col gap-3">
        <p class="">{{ __('events.ongoing') }}</p>
        <div class="flex gap-4">
            <p class="text-5xl font-semibold">The Big Bounce</p>
            <p class="self-end font-light">{{ __('common.by') }} idkthename</p>
        </div>
        <div class="flex items-center gap-2">
            <div class="bg-lime-600/10 w-fit mt-auto px-5 py-1 rounded-xl text-sm">
                <p>07 October 2025</p>
            </div>
            <x-local-icon icon="arrow-head" width="16px" height="16px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
            <div class="bg-lime-600/10 w-fit mt-auto px-5 py-1 rounded-xl text-sm">
                <p>02 December 2025</p>
            </div>
        </div>
        <p class="mt-5">{{ __('common.price') }}</p>
        <p class="text-3xl font-semibold">IDR <span class="text-lime-600">75.000</span></p>
    </div>
    <x-local-icon x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-x-5"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 -translate-x-5" icon="arrow" width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" class="ml-auto mr-10 transform rotate-45" xmlns="http://www.w3.org/2000/svg">
    </x-local-icon> 
</a>
<div class="grid grid-cols-1 mt-10 gap-4 lg:grid-cols-3 md:grid-cols-2">
    @foreach ($events as $event)
        <x-events-card href="/events/{{ $event->id }}/{{ $event->slug }}" date="{{ Carbon::parse($event->tanggal_mulai)->translatedFormat('d F Y') }} - {{ Carbon::parse($event->tanggal_selesai)->translatedFormat('d F Y') }}" image="{{ asset('storage/' . $event->gambar_event) }}" price="{{ number_format($event->harga_tiket, 0, '.', '.') }}">{{ $event->judul_event }}</x-events-card> 
    @endforeach
</div>
@endsection
