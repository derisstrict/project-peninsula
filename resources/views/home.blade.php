@extends('layout.layout')

@section('title', 'The Peninsula Island')

@section('content')

    @include('home-sections.landing-page')
    @include('home-sections.video')
    @include('home-sections.gallery', ['galleries' => $galleries])
    @include('home-sections.maps')
    @include('home-sections.things-to-do')

</section>


@endsection
