@extends('layout.layout')

@section('title', 'The Peninsula Island')

@section('content')
<div class="background-radial-blur left-0 transform -translate-y-70"></div>
<div class="flex gap-8 my-10">
    <div class="flex flex-col gap-6 max-w-2xl">
        <p class="text-5xl font-semibold">{!! __('report.title', ['accent' => '<span class="text-lime-600"> '. __('report.title_accent') .' </span>']) !!}
        <p class="text-xl">{{ __('report.description') }}</p>
        <div class="infobox-accent gap-3">
            <x-local-icon icon="info" class="text-lime-600" width="28px" height="28px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
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
