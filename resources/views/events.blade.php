@extends('layout.layout')

@section('title', 'The Peninsula Island')

@section('content')
<div class="background-radial-blur -translate-x-100 -translate-y-25"></div>
<p class="text-5xl text-center font-semibold"><span class="text-lime-600">Our </span>Events
</p>
<div class="relative flex bg-light-primary/5 w-fit items-center pl-3 rounded-xl p-2 gap-2 mt-20 ml-5 dark:bg-dark-primary/5">
    <svg class="text-lime-600" width="24px" height="24px" stroke="currentColor" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;stroke-miterlimit:10;stroke-width:1.91px;}</style></defs><circle class="cls-1" cx="9.14" cy="9.14" r="7.64"/><line class="cls-1" x1="22.5" y1="22.5" x2="14.39" y2="14.39"/></svg>
    <input type="text" id="search" class="w-80 outline-none" placeholder="Search">
    <div class="absolute right-5 text-light-primary/50 bg-light-primary/5 px-2 rounded-lg dark:text-dark-primary/50 dark:bg-dark-primary/5">t</div>
</div>
<a href="/events/events-detail" class="flex bg-lime-600/5 p-8 rounded-lg mt-10 gap-5 w-full items-center hover:bg-lime-600/10 transition-colors">
    <img src="img/placeholder.jpg" alt="event-image" class="w-80 h-60 object-cover rounded-xl">
    <div class="flex flex-col gap-3">
        <p class="">Ongoing Event</p>
        <div class="flex gap-4">
            <p class="text-5xl font-semibold">The Big Bounce</p>
            <p class="self-end font-light">by idkthename</p>
        </div>
        <div class="flex items-center gap-2">
            <div class="bg-lime-600/10 w-fit mt-auto px-5 py-1 rounded-xl text-sm">
                <p>07 October 2025</p>
            </div>
            <svg width="16px" height="16px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.82054 20.7313C8.21107 21.1218 8.84423 21.1218 9.23476 20.7313L15.8792 14.0868C17.0505 12.9155 17.0508 11.0167 15.88 9.84497L9.3097 3.26958C8.91918 2.87905 8.28601 2.87905 7.89549 3.26958C7.50497 3.6601 7.50497 4.29327 7.89549 4.68379L14.4675 11.2558C14.8581 11.6464 14.8581 12.2795 14.4675 12.67L7.82054 19.317C7.43002 19.7076 7.43002 20.3407 7.82054 20.7313Z"/>
            </svg>
            <div class="bg-lime-600/10 w-fit mt-auto px-5 py-1 rounded-xl text-sm">
                <p>02 December 2025</p>
            </div>
        </div>
        <p class="mt-5">Starting price</p>
        <p class="text-3xl font-semibold">IDR <span class="text-lime-600">75.000</span></p>
    </div>
    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" class="ml-auto mr-10 transform rotate-45" xmlns="http://www.w3.org/2000/svg">
        <path d="M7 17L17 7M17 7H8M17 7V16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg> 
</a>
<div class="grid grid-cols-3 mt-10 gap-4">
    <x-events-card href="/events/events-detail" date="19 October 2025" image="img/placeholder.jpg">Pura Bias Tugel a Temple in Peninsula Island</x-events-card>
    <x-events-card href="/events/events-detail" date="07 October 2025 - 2 December 2025" image="img/placeholder.jpg">The Big Bounce Festival is Back! This is Huge!</x-events-card>
    <x-events-card href="/events/events-detail" date="19 October 2025" image="img/placeholder.jpg">Pura Bias Tugel a Temple in Peninsula Island</x-events-card>
    <x-events-card href="/events/events-detail" date="19 October 2025" image="img/placeholder.jpg">Pura Bias Tugel a Temple in Peninsula Island</x-events-card>
    <x-events-card href="/events/events-detail" date="07 October 2025" image="img/placeholder.jpg">The Big Bounce Festival is Back! This is Huge!</x-events-card>
    <x-events-card href="/events/events-detail" date="07 October 2025" image="img/placeholder.jpg">The Big Bounce Festival is Back! This is Huge!</x-events-card>
</div>
@endsection
