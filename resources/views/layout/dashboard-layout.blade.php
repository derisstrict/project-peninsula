<!DOCTYPE html>
<html x-data="{ isLight: $persist(true) }" lang="en" :class=" isLight ? '' : 'dark' ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-bglight text-dashboard-light-primary dark:bg-bgdashboard-dark dark:text-dark-primary">
    @include('common.dashboard-navbar')
        <div class="flex justify-center items-center w-full">
            <div class="max-w-7xl mb-15 mx-10 w-full">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>