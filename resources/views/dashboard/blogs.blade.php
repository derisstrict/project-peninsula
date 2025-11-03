@extends('layout.dashboard-layout')

@section('title', 'Dashboard')

@section('content')
<div class="relative">
    <div class="background-radial-blur-dashboard top-0 inset-0 -translate-y-80"></div>
</div>
<p class="text-4xl text-center font-bold">Current <span class="text-sky-500">Blogs</span></p>
<div class="flex items-center mt-10 mx-5">
    <a href="" class="btn-primary p-3 w-fit mr-auto group">
        <x-icon icon="create" class="group-hover:text-sky-500 transition-colors" width="20px" height="20px" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"></x-icon>
        <p>Create new Article</p>   
    </a>
    <x-search-bar accent="text-sky-500"></x-search-bar>
</div>
<div class="grid grid-cols-1 mt-5 gap-3 md:grid-cols-2 lg:grid-cols-3">
    <x-dashboard-blogs-card href="/events/events-detail" date="19 October 2025" image="/img/placeholder.jpg" title="Pura Bias Tugel a Temple in Peninsula Island"></x-dashboard-blogs-card><x-dashboard-blogs-card href="/events/events-detail" date="19 October 2025" image="/img/placeholder.jpg" title="Pura Bias Tugel a Temple in Peninsula Island"></x-dashboard-blogs-card><x-dashboard-blogs-card href="/events/events-detail" date="19 October 2025" image="/img/placeholder.jpg" title="Pura Bias Tugel a Temple in Peninsula Island"></x-dashboard-blogs-card><x-dashboard-blogs-card href="/events/events-detail" date="19 October 2025" image="/img/placeholder.jpg" title="Pura Bias Tugel a Temple in Peninsula Island"></x-dashboard-blogs-card><x-dashboard-blogs-card href="/events/events-detail" date="19 October 2025" image="/img/placeholder.jpg" title="Pura Bias Tugel a Temple in Peninsula Island"></x-dashboard-blogs-card><x-dashboard-blogs-card href="/events/events-detail" date="19 October 2025" image="/img/placeholder.jpg" title="Pura Bias Tugel a Temple in Peninsula Island"></x-dashboard-blogs-card>
</div>
@endsection