<?php

use Carbon\Carbon;

Carbon::setLocale(app()->getLocale());
?>

@extends('layout.layout')

@section('title', 'The Peninsula Island')

@section('content')
<div class="background-radial-blur -translate-x-100 -translate-y-25"></div>
<p class="text-3xl text-center font-semibold md:text-5xl">{!! __('events.title', ['accent' => '<span class="text-color-accent"> '. __('events.title_accent') .' </span>']) !!}
</p>
<div class="flex flex-wrap mt-20 ml-5 gap-2 xl:flex-row">
    <x-search-bar accent="text-color-accent" search="{{ $search }}"></x-search-bar>
    <x-pagination-dropdown page="{{ $page }}"></x-pagination-dropdown>
    <div class="xl:ml-auto">
        {{ $events->onEachSide(0)->links() }}
    </div>
</div>
@foreach ($onGoingEvents as $onGoingEvent)
    @if ($onGoingEvent->tampilkan_event)
        <a x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" href="/events/{{ $onGoingEvent->id }}/{{ $onGoingEvent->slug }}" class="flex flex-col bg-color-accent/5 p-4 rounded-lg mt-10 gap-5 w-full hover:bg-color-accent/10 transition-colors md:p-8 lg:flex-row">
            <img src={{ asset('storage/' . $onGoingEvent->gambar_event) }} alt="event-image" class="w-full h-60 object-cover rounded-xl self-start md:h-80 lg:h-60 lg:w-80">
            <div class="flex flex-col gap-2 lg:gap-3">
                <p class="text-sm text-color-accent font-semibold md:text-md">{{ __('events.ongoing') }}</p>
                <div class="flex flex-col gap-2 lg:gap-4 xl:flex-row">
                    <p class="text-2xl font-semibold md:text-3xl lg:text-4xl">{{ $onGoingEvent->judul_event }}</p>
                    <p class="self-start font-light text-sm xl:self-end">{{ __('common.by') }} {{ $onGoingEvent->nama_penyelenggara }}</p>
                </div>
                <div class="flex items-center gap-1 md:gap-2">
                    <div class="bg-color-accent/10 w-fit mt-auto px-5 py-1 rounded-xl text-xs">
                        <p>{{ date('d F Y', strtotime($onGoingEvent->tanggal_mulai)) }}</p>
                    </div>
                    <x-local-icon icon="arrow-head" width="16px" height="16px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
                    <div class="bg-color-accent/10 w-fit mt-auto px-5 py-1 rounded-xl text-xs">
                        <p>{{ date('d F Y', strtotime($onGoingEvent->tanggal_selesai)) }}</p>
                    </div>
                </div>
                <p class="mt-auto">{{ __('common.price') }}</p>
                <p class="text-2xl font-bold lg:text-3xl">IDR <span class="text-color-accent">{{ number_format($onGoingEvent->harga_tiket, 0, '.', '.') }}</span></p>
            </div>
            <div class="hidden ml-auto mr-8 items-center justify-center xl:flex">
                <x-local-icon x-show="open" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 -translate-x-5"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 -translate-x-5" icon="arrow" width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" class="rotate-45" xmlns="http://www.w3.org/2000/svg">
                </x-local-icon> 
            </div>
            <div class="flex ml-auto items-center justify-center lg:mr-8 xl:hidden">
                <x-local-icon icon="arrow" width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" class="rotate-45" xmlns="http://www.w3.org/2000/svg">
                </x-local-icon> 
            </div>
        </a>
    @endif
@endforeach
@if ($countAllVisible === 0 || $events->isEmpty())
    <div class="flex flex-col w-full gap-3 h-[450px] bg-color-accent/2 p-5 rounded-xl mt-10 mb-15 justify-center items-center">
        <x-local-icon class="bg-color-accent/10 rounded-full w-[150px] md:w-[220px]" icon="storyset-empty-box" xmlns="http://www.w3.org/2000/svg" viewBox="-25 170 300 300"></x-local-icon>
        <p class="text-center text-lg font-bold text-color-accent">Belum Terdapat Event</p>
        <p class="text-center">Saat ini belum terdapat event pada Peninsula Island. Cek kembali di lain hari!</p>
        <a href="/" class="btn-primary p-3">
            <x-local-icon icon="arrow" width="16px" height="16px" class="rotate-225" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon> 
            Kembali ke home</a>
    </div>
@endif
<div class="grid grid-cols-1 mt-10 gap-4 lg:grid-cols-3 md:grid-cols-2">
    @foreach ($events as $event)
        @if ($event->tampilkan_event)
            <x-events-card href="/events/{{ $event->id }}/{{ $event->slug }}" date="{{ Carbon::parse($event->tanggal_mulai)->translatedFormat('d F Y') }} - {{ Carbon::parse($event->tanggal_selesai)->translatedFormat('d F Y') }}" image="{{ asset('storage/' . $event->gambar_event) }}" price="{{ number_format($event->harga_tiket, 0, '.', '.') }}">{{ $event->judul_event }}</x-events-card>     
        @endif
    @endforeach
</div>
@endsection
