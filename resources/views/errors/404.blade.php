@extends('layout.layout')

@section('title', 'Page Not Found')

@section('content')


</section>

    <div class="flex flex-col gap-4 bg-color-accent/3 px-10 py-25 rounded-xl">
        <h1 class="text-[190px] font-bold text-center text-color-accent">404</h1>
        <h2 class="text-center text-4xl text-color-accent font-bold">{{ __('error.heading') }}</h2>
        <p class="text-center text-xl">{{ __('error.description') }}</p>
        <div class="flex justify-center">
            <a href="/events" class="btn-primary p-3 w-fit">
                <x-local-icon icon="arrow" width="16px" height="16px" class="rotate-225" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
                <p class="text-sm">{{ __('common.back_to_home') }}</p>
            </a>
        </div>
    </div>

@endsection
