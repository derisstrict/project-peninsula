@extends('layout.layout')

@section('title', 'The Peninsula Island')

@section('content')
<a href="/events" class="btn-primary p-3 w-fit">
    <x-local-icon icon="arrow" width="16px" height="16px" class="rotate-225" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
    <p class="text-sm">Back</p>
</a>
<div class="flex flex-col gap-2 mt-5">
    <img class="rounded-xl self-center w-500 h-150 object-cover" src="{{ asset('storage/' . $event['gambar_event']) }}" alt="event-image">
    <p class="text-4xl font-semibold mt-5">{{ $event->judul_event }}<span class="ml-2 text-sm font-normal">by {{ $event->nama_penyelenggara }}</span></p>
    <div class="flex gap-5 mt-5">
        <div class="infobox-accent">
            <div class="flex gap-3">
                <x-local-icon icon="time" class="text-lime-600" width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor"
                    outline="currentColor" xmlns="http://www.w3.org/2000/svg">
                </x-local-icon>
                <div class="flex flex-col gap">
                    <p class="font-bold">Event Timeline</p>
                    <p>{{ date('d F Y', strtotime($event->tanggal_mulai)) }} - {{ date('d F Y', strtotime($event->tanggal_selesai)) }}</p>
                </div>
            </div>
        </div>
        <div class="infobox-accent">
            <div class="flex gap-3">
                <x-local-icon icon="money" class="text-lime-600" width="24px" height="24px" viewBox="-0.5 0 25 25" fill="currentColor"
                stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                </x-local-icon>
                <div class="flex flex-col gap">
                    <p class="font-bold">Starting Price</p>
                    <p>IDR {{ number_format($event->harga_tiket, 0, '.', '.') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="prose !max-w-none text-xl mt-6 dark:prose-invert">
        {!! $event->deskripsi_event !!}
    </div>
</div>
@endsection
