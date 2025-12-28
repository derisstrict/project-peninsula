@extends('layout.layout')

@section('title', 'The Peninsula Island')

@section('content')
<div class="background-radial-blur left-0 transform -translate-x-70 -translate-y-70 scale-60 md:scale-60 md:-translate-x-100 md:translate-x-0 lg:scale-100"></div>
<div class="flex flex-col gap-8 my-10 lg:flex-row">
    <div class="flex flex-col gap-6 max-w-2xl">
        <p class="text-4xl text-center font-semibold md:text-5xl md:text-start">{!! __('report.title', ['accent' => '<span class="text-color-accent"> '. __('report.title_accent') .' </span>']) !!}
        <p class="text-lg text-center md:text-xl md:text-start">{{ __('report.description') }}</p>
        <div class="infobox-accent gap-3 self-center">
            <x-local-icon icon="info" class="text-color-accent min-w-[20px] max-w-[28px]" width="28px" height="28px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
            <div class="flex flex-col gap-2">
                <p class="font-semibold">{{ __('report.box_title') }}</p>
                <p>{{ __('report.box_description') }}</p>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-3 w-full">
        <p class="font-bold">{{ __('report.form_title') }}</p>
        <div class="bg-gray-50/75 px-8 py-8 rounded-xl dark:bg-gray-50/5">
            @livewire('report-form')
        </div>
    </div>
</div>
@endsection
