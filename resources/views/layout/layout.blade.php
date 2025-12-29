<!DOCTYPE html>
<html x-data="{ toggleTheme: $persist(false), openMapPopup: false, isHamOpen: false }" :class="toggleTheme ? '' : 'dark'" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script> --}}
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    @vite('resources/css/app.css')
    @filamentStyles
    @livewireStyles
</head>
<body class="min-h-screen flex flex-col bg-bglight text-light-primary dark:bg-bgdark dark:text-dark-primary">
    @include('common.navbar')
    <main class="flex-1 flex justify-center">
        <div class="flex flex-col max-w-[80rem] w-full mt-10 mx-5 lg:mx-20 md:mt-30">
            @yield('content')
        </div>
    </main>
    @include('common.footer')
<body class="bg-bglight text-light-primary dark:bg-bgdark dark:text-dark-primary">
    <div x-cloak>
        @include('common.navbar')
        <div class="flex justify-center items-center">
            <div class="flex flex-col max-w-[80rem] w-full mt-10 mx-5 lg:mx-20 md:mt-30">
                @yield('content')
            </div>
        </div>
        @include('common.footer')
    </div>
    @livewire('notifications') 
    @filamentScripts
    @livewireScripts
</body>
</html>