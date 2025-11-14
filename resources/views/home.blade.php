@extends('layout.layout')

@section('title', 'The Peninsula Island')

@section('content')
<div class="background-radial-blur transform -translate-y-25"></div>
<!-- Landing Page -->
<div class="relative flex flex-col max-w-4xl gap-8">
    <p class="text-6xl font-semibold md:text-8xl">The
        <br><span class="text-lime-600">Peninsula Island</span>
    </p>
    <p class="text-lg max-w-2xl md:text-2xl">A scenic coastal park known for its lush greenery, cultural statues, and
        dramatic ocean views, open to the public and perfect for peaceful walks or events.</p>
    <div class="flex flex-col gap-4 md:flex-row">
        <div class="infobox-accent gap-3">
            <x-local-icon icon="time" class="text-lime-600" width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor" stroke="none" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
            <div class="flex flex-col gap-2">
                <p class="font-bold">Open Hours</p>
                <p>Every day | 06.00 AM - 10.00 PM</p>
            </div>
        </div>
        <div class="infobox-accent gap-3">
            <x-local-icon icon="money" class="text-lime-600" width="24px" height="24px" viewBox="-0.5 0 25 25" fill="currentColor"
                stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
            <div class="flex flex-col gap-2">
                <p class="font-bold">Entrance fee</p>
                <p>Rp. 5000</p>
            </div>
        </div>
    </div>

    <div class="flex flex-col gap-2">
        <p class="text-sm">Quick links</p>
        <div class="flex gap-2">
            <a href="/" class="btn-primary p-2">
                <x-local-icon icon="calendar" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
                <span>Today's event</span></a>
            <a href="/" class="btn-primary p-2">
                <x-local-icon icon="maps" width="16px" height="16px" viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg"
                    fill="none" stroke="currentColor"></x-local-icon>
                <span>Our maps</span></a>
        </div>
    </div>
</div>
<div class="flex flex-col items-center mt-25 gap-2">
    scroll more
    <x-local-icon icon="double-arrow" class="rotate-90" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
</div>
<img class="absolute h-135 w-[calc((27vw-10rem)*2)] hidden top-40 right-0 object-cover rounded-xl outline-4 outline-lime-600/15 xl:block"
src="img/placeholder.jpg" alt="img-peninsula-island">
<!-- /Landing Page -->

<!-- Video -->
 <div class="relative mt-32 rounded-xl overflow-hidden group cursor-pointer">
    <img class="h-200 w-full object-cover" src="/img/placeholder.jpg" alt="video">
    <div class="absolute inset-0 bg-black/45 group-hover:bg-black/65 transition-colors duration-700"></div>
    <div class="absolute inset-0 flex flex-col gap-5 items-center justify-center">
        <x-local-icon class="text-white transition-colors duration-700 group-hover:text-lime-600" icon="play" width="48px" height="48px" fill="currentColor" viewBox="-0.5 0 7 7" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></x-local-icon>
        <p class="text-white">Play the video</p>
    </div>
 </div>
 <!-- /Video -->

<!-- Gallery -->
<div class="mt-32 relative">
    <div class="flex justify-center items-center mx-auto mb-5">
        <h1 class="text-3xl font-semibold md:text-6xl">
            Enjoy the <span class="text-lime-600">Fresh Air</span> of Nusa Dua
        </h1>
    </div>

    <p class="text-center text-lg mb-5 mx-auto md:text-xl">
        Explore The Peninsula Island whether you want to view the sunsets, picnics or morning jogging.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-[2fr_1fr] gap-6 mx-auto">
        <!-- Image 1 -->
        <div class="relative group overflow-hidden rounded-xl">
            <img src="./img/gallery1.jpg" alt="Beach View" class="w-full h-120 object-cover transition duration-300 group-hover:scale-110">
        </div>
        
        <!-- Image 2 -->
        <div class="relative group overflow-hidden rounded-xl">
            <img src="./img/gallery2.jpg" alt="Beach View" class="w-full h-120 object-cover transition duration-300 group-hover:scale-110">
        </div>
        
        <!-- Image 3 -->
        <div class="relative group/bg overflow-hidden rounded-xl md:col-span-2">
            <img src="./img/gallery3.jpg" alt="Beach View" 
            class="w-full h-100 object-cover transition duration-300 group-hover/bg:blur-[2px] group-hover/bg:scale-110">
            <div class="absolute inset-0 bg-black/45 transition duration-700 group-hover/bg:bg-black/60"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center">
                <h2 class="font-bold text-2xl mb-4">Explore our image collections</h2>
                <a href="#"
                class="bg-white/30 px-5 py-2 rounded-full font-medium hover:bg-lime-600 hover:text-white transition duration-500 flex items-center justify-center group/button">
                Explore
                <x-local-icon icon="arrow-head" fill="currentColor" viewBox="0 0 24 24" stroke="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform duration-300 group-hover/button:translate-x-1"></x-local-icon>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- /Gallery -->
    
<!-- Spots Map -->
<div class="mt-32">
    <p class="text-3xl font-semibold text-center mb-10 md:text-6xl">
        <span class="text-lime-600">Explore </span>What's Inside
    </p>

    <div class="h-[40rem] mx-auto mb-32 overflow-hidden rounded-2xl shadow-lg bg-gray-200">
        <div id="mapContainer" class="w-full h-full cursor-grab active:cursor-grabbing" onmousedown="return false">
        </div>
    </div>
</div>
<!-- /Spots Map -->

<script>

    var tileSize = 256;
    var pxHeight = 3 * tileSize;
    var pxWidth = 6 * tileSize;
    var zoomLvl = 2**3;
    var widthOffset = 10;
    var projHeight = pxHeight / zoomLvl;
    var projWidth = pxWidth / zoomLvl - widthOffset;
    var bounds = [[-projHeight, 0], [0, projWidth]];
    
    var map = L.map('mapContainer', {
        //center: [60, 50],
        crs: L.CRS.Simple,
        center: [projHeight/2-100, projWidth/2],
        zoom: 4,
        maxBoundsViscosity: 1.0,
        attributionControl: false
    });

    map.setMaxBounds(bounds);

    var tilesPath = "{{ asset('storage/map/tiles/{z}/{x}/{y}.png') }}";

    L.tileLayer(tilesPath, {
        minZoom: 3,
        maxZoom: 5,
        noWrap: true,
    }).addTo(map);

</script>

<x-map-marker xpos="-65" ypos="56" title="Helipad" desc="Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus amet iusto soluta enim ipsa dignissimos?" img="/img/placeholder.jpg"></x-map-marker>

<!-- Where's the Location -->
<div class="relative flex flex-col">
    <p class="text-3xl font-semibold md:text-6xl">
        Where's
        <br><span class="text-lime-600">The Location</span>
    </p>
    <div class="flex flex-col justify-between xl:flex-row xl:items-center">
        <p class="mt-6 text-lg max-w-4xl md:text-xl">
            Peninsula Island is located in Nusa Dua, on the southeastern coast of Bali, Indonesia.
            It sits within the ITDC (Indonesia Tourism Development Corporation) complex,
            a gated resort area known for its luxury hotels and pristine beaches.
        </p>
        <a href="https://www.google.com/maps/place/Peninsula+Island/@-8.8025875,115.2374891,18.12z/data=!4m6!3m5!1s0x2dd242d7ab709d33:0x39de1606c19ad392!8m2!3d-8.8025715!4d115.2385947!16s%2Fg%2F1q6crdh9p!5m1!1e1?entry=ttu&g_ep=EgoyMDI1MTExMS4wIKXMDSoASAFQAw%3D%3D" class="btn-primary p-4 mt-5 self-center w-fit md:mt-5">
            <x-local-icon icon="google-maps" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 48 48"></x-local-icon>
            <span class="text-sm">Take me to Google Maps</span>
            <x-local-icon icon="external-link" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
        </a>
    </div>
    <div class="background-radial-blur transform -translate-y-25"></div>
</div>
<!-- /Where's the Location -->

<!-- Google Maps -->
<div class="relative w-full h-[40rem] mt-10 mx-auto mb-32 overflow-hidden rounded-2xl shadow-lg bg-gray-200">
    <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1807.793096453511!2d115.2374891438277!3d-8.802587533390318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd242d7ab709d33%3A0x39de1606c19ad392!2sPeninsula%20Island!5e0!3m2!1sen!2sid!4v1763101198309!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- /Google Maps -->

<!--Things You Can Do-->
<div>
    <p class="text-6xl font-semibold mb-9 text-center">
        <span class="text-lime-600">Things</span> You Can Do
    </p>
    <p class="mt-6 max-w-4xl text-xl text-center mx-auto">
        Let's make your free time more meaningful! Here are six easy activity ideas you can do alone or with loved ones to recharge your batteries and improve your quality of life.
    </p>
</div>

<!--Isi activity-->
<div class="grid grid-cols-2 gap-6 mt-6">
    <div class="infobox-accent">
        <div class="m-4">
            <x-local-icon class="text-lime-600" icon="jogging" width="45" height="45" viewBox="0 0 45 45" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon> 
            <h3 class="font-bold mt-2">Jogging</h3>
            <p class="mt-2">Improve your heart health and endurance with morning jogging. 
                Daily jogging routine not only helps burn calories and maintain a healthy weight, 
                but it's also a highly effective way to start the day with high energy, clear your mind, and improve mental focus.</p>
        </div>
    </div>
    <div class="infobox-accent">
        <div class="m-4">
            <x-local-icon class="text-lime-600" icon="sun-2" width="45" height="45" viewBox="0 0 45 45" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon> 
            <h3 class="font-bold mt-2">Sunbathing</h3>
            <p class="mt-2">Take advantage of morning sunlight to stimulate the production of Vitamin D, an essential nutrient that supports immune function and maintains bone density. 
                A brief exposure to gentle sunlight has also been shown to improve your overall mood and reduce the risk of depression.</p>
        </div>
    </div>
    <div class="infobox-accent">
        <div class="m-4">
            <x-local-icon class="text-lime-600" icon="cycling" width="45" height="45" viewBox="0 0 45 45" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon> 
            <h3 class="font-bold mt-2">Cycling</h3>
            <p class="mt-2">Experience the freedom of pedaling through green paths and surrounding neighborhoods. 
                Cycling is an excellent low-impact exercise for building leg strength, increasing lung capacity, and is a fun way to explore new areas.</p>
        </div>
    </div>
    <div class="infobox-accent">
        <div class="m-4">
            <x-local-icon class="text-lime-600" icon="basket" width="45" height="45" viewBox="0 0 45 45" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon> 
            <h3 class="font-bold mt-2">Family Picnic</h3>
            <p class="mt-2">Put your gadgets aside and spend unforgettable time with your loved ones. Prepare your favorite food and enjoy a delicious meal in the park or by the lake, making it the perfect opportunity to bond with your family while breathing in the fresh air.</p>
        </div>
    </div>
        <div class="infobox-accent">
        <div class="m-4">
            <x-local-icon class="text-lime-600" icon="yoga" width="45" height="45" viewBox="0 0 45 45" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
            <h3 class="font-bold mt-2">Yoga</h3>
            <p class="mt-2">Focus your attention on harmonizing your breathing with gentle but purposeful body movements. Regular yoga practice is ideal for increasing joint and muscle flexibility, relieving physical tension caused by stress, and achieving a state of deep mental calm.</p>
        </div>
    </div>
        <div class="infobox-accent">
        <div class="m-4">
            <x-local-icon class="text-lime-600" icon="children-games" width="45" height="45" viewBox="0 0 45 45" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon> 
            <h3 class="font-bold mt-2">Children Games</h3>
            <p class="mt-2">Unleash your child's energy with a fun, running adventure on Peninsula Island's vast, safe green expanse. Here, surrounded by stunning ocean views, every game becomes a beautiful memory.</p>
        </div>
    </div>
</div>
<!--Isi Activity-->
@endsection

