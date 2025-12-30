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

    <?php
        $galleryImgsArr = $galleries->pluck('url_media')->toArray();
    ?>

    <div class="grid grid-cols-1 md:grid-cols-[2fr_1fr] gap-6 mx-auto">

        @foreach ($galleries as $gallery)
            @if ($loop->iteration > 2) 
                @break
            @endif
            <div class="relative group overflow-hidden rounded-xl">
                <img 
                    src="{{ asset('img/' . $gallery->url_media) }}"
                    class="w-full h-120 object-cover transition duration-300 cursor-pointer group-hover:scale-110"
                    onclick="openModal(@js($galleryImgsArr), {{ $loop->index }})"
                >
            </div>
        @endforeach
      
    </div>

{{-- EXPLORE / FOTO BESAR --}}
<div class="relative group/bg overflow-hidden rounded-xl mt-6">
    <img 
        src="{{ asset('img/'.$galleries[2]->url_media) }}"
        class="w-full h-[420px] md:h-[520px] object-cover transition duration-300
            group-hover/bg:blur-[2px] group-hover/bg:scale-110">

        <div class="absolute inset-0 bg-black/45 transition duration-700 group-hover/bg:bg-black/60"></div>

        <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center">
            <h2 class="font-bold text-2xl mb-4">
                {{ __('gallery.collections') }}
            </h2>

            <a onclick="openModal(@js($galleryImgsArr), 0)"
                class="bg-white/30 px-5 py-2 rounded-full font-medium cursor-pointer
                        hover:bg-lime-600 hover:text-white transition duration-500
                        flex items-center justify-center group/button">

                {{ __('gallery.explore') }}
                <x-local-icon 
                    icon="arrow-head"
                    class="w-5 h-5 transform transition-transform duration-300
                            group-hover/button:translate-x-1" fill="currentColor" viewBox="0 0 24 24" stroke="none" xmlns="http://www.w3.org/2000/svg"/>
            </a>
        </div>
    </div>
</div>


<!-- /Gallery -->