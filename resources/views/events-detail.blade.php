<?php 

use Carbon\Carbon;

Carbon::setLocale(app()->getLocale());

?>

@extends('layout.layout')

@section('title', 'The Peninsula Island')

@section('content')
<a href="/events" class="btn-primary p-3 w-fit">
    <x-local-icon icon="arrow" width="16px" height="16px" class="rotate-225" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
    <p class="text-sm">{{ __('common.back') }}</p>
</a>
<div class="flex flex-col gap-3 mt-5">
    <div class="flex flex-col bg-color-accent/8 p-8 rounded-xl">
        <img class="rounded-xl self-center w-500 h-80 object-cover md:h-100 lg:h-150" src="{{ asset('storage/' . $event->gambar_event) }}" alt="{{ $event->alt_gambar }}">
        <div class="flex flex-col mt-5 lg:flex-row">
            <div class="flex flex-col gap-3">
                <div class="flex flex-col md:items-end md:flex-row">
                    <p class="text-3xl font-semibold text-color-accent md:text-4xl">{{ $event->judul_event }}</p>
                    <p class="text-sm font-light h-fit md:ml-2">{{ __('common.by') }} {{ $event->nama_penyelenggara }}</p>
                </div>
                <div class="flex items-center gap-1 md:gap-2">
                    <div class="bg-color-accent/10 w-fit mt-auto px-5 py-1 rounded-xl text-xs">
                        <p>{{ date('d F Y', strtotime($event->tanggal_mulai)) }}</p>
                    </div>
                    <x-local-icon icon="arrow-head" width="16px" height="16px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
                    <div class="bg-color-accent/10 w-fit mt-auto px-5 py-1 rounded-xl text-xs">
                        <p>{{ date('d F Y', strtotime($event->tanggal_selesai)) }}</p>
                    </div>
                </div>
            </div>
            <div class="mt-5 lg:ml-auto">
                <p>{{ __('common.price') }}</p>
                <p class="text-2xl font-bold lg:text-3xl">IDR <span class="text-color-accent">{{ number_format($event->harga_tiket, 0, '.', '.') }}</span></p>
            </div>
        </div>
    </div>
    <div class="prose prose-neutral prose-md prose-strong:font-medium dark:prose-invert mt-6 !max-w-none md:prose-lg lg:prose-xl">
        {!! $event->deskripsi_event !!}
    </div>
</div>
@endsection
