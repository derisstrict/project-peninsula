<!-- Gallery -->
<div class="mt-32 relative">
    <div class="flex justify-center items-center mx-auto mb-5">
        <h1 class="text-3xl font-semibold text-center md:text-6xl md:text-start">
            {{-- Enjoy the <span class="text-color-accent">Fresh Air</span> of Nusa Dua --}}
            {!! __('gallery.title', ['accent' => '<span class="text-color-accent">'. __('gallery.title_accent'). '</span>']) !!}
        </h1>
        <div class="background-radial-blur -translate-y-80"></div>
    </div>

    <p class="text-center text-md mb-5 mx-auto md:text-xl">
        {{ __('gallery.description') }}
    </p>

    <div class="grid grid-cols-1 md:grid-cols-[2fr_1fr] gap-6 mx-auto">
        <!-- Image 1 -->
        <div class="relative group overflow-hidden rounded-xl">
            <img src="/img/gallery1.jpg" alt="Beach View" class="w-full h-120 object-cover transition duration-300 group-hover:scale-110">
        </div>
        
        <!-- Image 2 -->
        <div class="relative group overflow-hidden rounded-xl">
            <img src="/img/gallery2.jpg" alt="Beach View" class="w-full h-120 object-cover transition duration-300 group-hover:scale-110">
        </div>
        
        <!-- Image 3 -->
        <div class="relative group/bg overflow-hidden rounded-xl md:col-span-2">
            <img src="/img/gallery3.jpg" alt="Beach View" 
            class="w-full h-100 object-cover transition duration-300 group-hover/bg:blur-[2px] group-hover/bg:scale-110">
            <div class="absolute inset-0 bg-black/45 transition duration-700 group-hover/bg:bg-black/60"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center">
                <h2 class="font-bold text-2xl mb-4">{{ __('gallery.collections') }}</h2>
                <a onclick="openModal(['gallery1.jpg', 'gallery2.jpg', 'gallery3.jpg'], 0)"
                class="bg-white/30 px-5 py-2 rounded-full font-medium cursor-pointer hover:bg-lime-600 hover:text-white transition duration-500 flex items-center justify-center group/button">
                {{ __('gallery.explore') }}
                <x-local-icon icon="arrow-head" fill="currentColor" viewBox="0 0 24 24" stroke="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform duration-300 group-hover/button:translate-x-1"></x-local-icon>
                </a>
            </div>
        </div>
    </div>
</div>