@extends('layout.layout')

@section('title', 'The Peninsula Island')

@section('content')
<div class="background-radial-blur -translate-x-100 -translate-y-25"></div>
<p class="text-5xl text-center font-semibold"><span class="text-lime-600">Discover More </span>About This Place</p>
<div class="relative flex bg-light-primary/15 w-fit items-center pl-3 rounded-xl p-2 gap-2 mt-20 ml-5 dark:bg-dark-primary/15">
    <svg class="text-lime-600" width="24px" height="24px" stroke="currentColor" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;stroke-miterlimit:10;stroke-width:1.91px;}</style></defs><circle class="cls-1" cx="9.14" cy="9.14" r="7.64"/><line class="cls-1" x1="22.5" y1="22.5" x2="14.39" y2="14.39"/></svg>
    <input type="text" id="search" class="w-80 outline-none" placeholder="Search">
    <div class="absolute right-5 text-light-primary/35 dark:text-dark-primary/35">enter</div>
</div>
<div class="grid grid-cols-3 mt-10">
    <x-blogs-card href="/blogs/blogs-detail" date="19 October 2025" image="img/placeholder.jpg">Pura Bias Tugel a Temple in Peninsula Island</x-blogs-card>
    <x-blogs-card href="/blogs/blogs-detail" date="07 October 2025" image="img/placeholder.jpg">The Big Bounce Festival is Back! This is Huge!</x-blogs-card>
    <x-blogs-card href="/blogs/blogs-detail" date="19 October 2025" image="img/placeholder.jpg">Pura Bias Tugel a Temple in Peninsula Island</x-blogs-card>
    <x-blogs-card href="/blogs/blogs-detail" date="19 October 2025" image="img/placeholder.jpg">Pura Bias Tugel a Temple in Peninsula Island</x-blogs-card>
    <x-blogs-card href="/blogs/blogs-detail" date="07 October 2025" image="img/placeholder.jpg">The Big Bounce Festival is Back! This is Huge!</x-blogs-card>
    <x-blogs-card href="/blogs/blogs-detail" date="07 October 2025" image="img/placeholder.jpg">The Big Bounce Festival is Back! This is Huge!</x-blogs-card>
@endsection
