@extends('layout.layout')

@section('title', 'The Peninsula Island')

@section('content')

    @include('home-sections.landing-page')
    @include('home-sections.video')
    @include('home-sections.gallery')
    @include('home-sections.maps')
    @include('home-sections.things-to-do')


<!--Things You Can Do-->
<section class="container mx-auto mt-32 flex flex-col items-center text-center">
    <div>
        <p class="text-6xl font-semibold text-lime-600 mb-10">
            Things <span class="text-light-primary">You Can Do</span>
        </p>
        <p class="mt-6 max-w-4xl text-xl">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur recusandae dolor et, explicabo ipsum deleniti? 
            Temporibus fuga corrupti, sit porro voluptatibus suscipit? Corrupti alias quasi nesciunt ratione harum praesentium eius?</p>
    </div>
</section>


@endsection
