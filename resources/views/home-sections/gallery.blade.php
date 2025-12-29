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

    @if($galleries->count() > 0)
    <div class="relative group overflow-hidden rounded-xl">
        <img 
            src="{{ asset('storage/'.$galleries[0]->url_media) }}"
            class="w-full h-120 object-cover transition duration-300 group-hover:scale-110"
        >
    </div>
@endif


    @if($galleries->count() > 1)
    <div class="relative group overflow-hidden rounded-xl">
        <img 
            src="{{ asset('storage/'.$galleries[1]->url_media) }}"
            class="w-full h-120 object-cover transition duration-300 group-hover:scale-110"
        >
    </div>
@endif


    {{-- EXPLORE / FOTO BESAR --}}
    @if($galleries->count() > 0)
    <div class="relative group/bg overflow-hidden rounded-xl md:col-span-2">
        <img 
            src="{{ asset('storage/'.$galleries[0]->url_media) }}"
            class="w-full h-[420px] md:h-[520px] object-cover transition duration-300
                   group-hover/bg:blur-[2px] group-hover/bg:scale-110">

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
                <h2 class="font-bold text-2xl mb-4">
                    {{ __('gallery.collections') }}
                </h2>

                <a onclick="openModal()"
                    class="bg-white/30 px-5 py-2 rounded-full font-medium cursor-pointer
                            hover:bg-lime-600 hover:text-white transition duration-500
                            flex items-center justify-center group/button">

                    {{ __('gallery.explore') }}

                    <x-local-icon 
                        icon="arrow-head"
                        class="w-5 h-5 transform transition-transform duration-300
                                group-hover/button:translate-x-1"/>
                </a>
            </div>
        </div>
    @endif

</div>


<!-- /Gallery -->
<script>
    const galleries = @json($galleries);

    let media = galleries.map(item => ({
        type: item.tipe_media, // foto | video
        src: `/storage/${item.url_media}`
    }));

    let currentIndex = 0;

    function openModal(startIndex = 0) {
        currentIndex = startIndex;
        document.getElementById('galleryModal').classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
        showMedia();
    }

    function closeModal() {
        document.getElementById('galleryModal').classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
        document.getElementById('mediaContainer').innerHTML = '';
    }

    function showMedia() {
        const container = document.getElementById('mediaContainer');
        container.innerHTML = '';

        const item = media[currentIndex];
        if (!item) return;

        // FOTO
        if (item.type === 'foto') {
            const img = document.createElement('img');
            img.src = item.src;
            img.className = 'max-h-[80vh] max-w-[90vw] object-contain';
            container.appendChild(img);
        }

        // VIDEO
        if (item.type === 'video') {
            const video = document.createElement('video');
            video.src = item.src;
            video.controls = true;
            video.autoplay = true;
            video.muted = true; // WAJIB biar autoplay nggak diblok
            video.playsInline = true;
            video.className = 'max-h-[80vh] max-w-[90vw] object-contain';
            container.appendChild(video);
        }
    }

    function prevImage() {
        currentIndex = (currentIndex - 1 + media.length) % media.length;
        showMedia();
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % media.length;
        showMedia();
    }
</script>

<div id="galleryModal"
     class="fixed inset-0 z-[9999] flex items-center justify-center
            bg-black/50 backdrop-blur-[2px] hidden">

    <button onclick="closeModal()" 
            class="absolute top-15 w-10 h-10 cursor-pointer flex items-center justify-center 
                text-black text-3xl font-bold z-[60] 
                bg-white/80 rounded-full border-2 border-transparent
                hover:bg-black/80 hover:scale-110 hover:border-white
                backdrop-blur-[2px] transition duration-300 ease-in-out group">
            <svg class="w-7 h-7 text-back group-hover:text-lime-400 transition" 
                fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <line x1="6" y1="6" x2="18" y2="18" stroke-linecap="round"/>
                <line x1="18" y1="6" x2="6" y2="18" stroke-linecap="round"/>
            </svg>
        </button>

    <button onclick="prevImage()" 
            class="absolute w-10 h-10 left-4 md:left-12 cursor-pointer flex items-center justify-center
                text-black z-[60] bg-white/80 rounded-full border-2 border-transparent
                hover:bg-black/20 hover:scale-110 hover:border-white
                backdrop-blur-[2px] transition duration-300 ease-in-out group">
            <svg class="w-6 h-6 text-black group-hover:text-lime-400 group-hover:-translate-x-1 transition duration-30" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <polyline points="15 18 9 12 15 6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>

        <div id="mediaContainer"
            class="max-h-[80vh] max-w-[90vw] rounded-xl shadow-lg
                    overflow-hidden flex items-center justify-center bg-black">
        </div>

        <button onclick="nextImage()" 
                class="absolute w-10 h-10 right-4 md:right-12 cursor-pointer flex items-center justify-center
                    text-black z-[60] bg-white/80 rounded-full border-2 border-transparent
                    hover:bg-black/20 hover:scale-110 hover:border-white
                    backdrop-blur-[2px] transition duration-300 ease-in-out group">
                <svg class="w-6 h-6 text-black group-hover:text-lime-400 group-hover:translate-x-1 transition duration-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <polyline points="9 6 15 12 9 18" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
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