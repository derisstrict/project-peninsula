@extends('layout.layout')

@section('title', 'The Peninsula Island')

@section('content')
<div class="background-radial-blur left-0 transform -translate-y-70"></div>
<div class="flex gap-8 my-10">
    <div class="flex flex-col gap-6">
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
    <div class="flex flex-col gap-3">
        <p class="font-bold">{{ __('report.form_title') }}</p>
        <div class="flex gap-3">
            <div class="flex bg-light-primary/5 w-fit items-center pl-3 rounded-xl p-2 gap-2 dark:bg-dark-primary/5">
                <x-local-icon icon="user" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
                <input type="text" id="name" class="w-80 outline-none" placeholder="{{ __('report.name') }}">
            </div>
            <div class="flex bg-light-primary/5 w-fit items-center pl-3 rounded-xl p-2 gap-2 dark:bg-dark-primary/5">
                <x-local-icon icon="email" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
                <input type="text" id="email" class="w-80 outline-none" placeholder="{{ __('report.email') }}">
            </div>
        </div>
        <div class="flex flex-col bg-light-primary/5 w-full pl-3 rounded-xl p-2 gap-2 dark:bg-dark-primary/5">
            <div class="flex gap-2 items-center">
                <x-local-icon icon="file-pencil" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
                <p>{{ __('report.report') }}</p>
            </div>
            <textarea type="text" id="name" rows="8" class="w-full  rounded-lg outline-none bg-light-primary/5 p-2 resize-none dark:bg-dark-primary/5"></textarea>
        </div>
        <div class="flex items-center gap-3">
            <button class="btn-primary p-3 w-fit">
                <x-local-icon icon="attachment" height="16px" width="16px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	            viewBox="0 0 512 512" fill="currentColor" stroke="currentColor"  xml:space="preserve"></x-local-icon>
                {{ __('report.attachments') }}
            </button>            
            <p class="text-xs">{{ __('report.attachments_note') }}</p>
            <button class="btn-primary p-3 ml-auto">
                <x-local-icon icon="tick" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                </x-local-icon>
                {{ __('report.submit') }}</button>
        </div>
    </div>
</div>
@endsection
