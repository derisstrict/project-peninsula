<!-- Gallery -->
<div class="mt-32 relative">
    <div class="flex justify-center items-center mx-auto mb-5">
        <h1 class="text-3xl font-semibold md:text-6xl">
            Enjoy the <span class="text-lime-600">Fresh Air</span> of Nusa Dua
        </h1>
    </div>

    <p class="text-center text-lg mb-5 mx-auto md:text-xl">
        {{ __('Explore The Peninsula Island whether you want to view the sunsets, picnics or morning jogging.') }}
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
                <a onclick="openModal(1)"
                class="bg-white/30 px-5 py-2 rounded-full font-medium hover:bg-lime-600 hover:text-white transition duration-500 flex items-center justify-center group/button">
                Explore
                <x-local-icon icon="arrow-head" fill="currentColor" viewBox="0 0 24 24" stroke="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform duration-300 group-hover/button:translate-x-1"></x-local-icon>
                </a>
            </div>
        </div>
    </div>
      <!-- pop up -->
    <div id="galleryModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-[4px] hidden">

        <button onclick="closeModal()" 
            class="absolute top-15 w-10 h-10 flex items-center justify-center 
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
            class="absolute w-10 h-10 left-4 md:left-12 flex items-center justify-center
                text-black z-[60] bg-white/80 rounded-full border-2 border-transparent
                hover:bg-black/20 hover:scale-110 hover:border-white
                backdrop-blur-[2px] transition duration-300 ease-in-out group">
            <svg class="w-6 h-6 text-black group-hover:text-lime-400 group-hover:-translate-x-1 transition duration-30" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <polyline points="15 18 9 12 15 6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>

        <img id="modalImg" src="" alt="Gallery Popup" 
            class="max-h-[80vh] max-w-[90vw] rounded-xl shadow-lg transition-all duration-300">

        <button onclick="nextImage()" 
            class="absolute w-10 h-10 right-4 md:right-12 flex items-center justify-center
                text-black z-[60] bg-white/80 rounded-full border-2 border-transparent
                hover:bg-black/20 hover:scale-110 hover:border-white
                backdrop-blur-[2px] transition duration-300 ease-in-out group">
            <svg class="w-6 h-6 text-black group-hover:text-lime-400 group-hover:translate-x-1 transition duration-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <polyline points="9 6 15 12 9 18" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>

    </div>
</div>
<!-- /Gallery -->

<script>
    //galery
    const images = [
        "{{ asset('img/gallery1.jpg') }}",
        "{{ asset('img/gallery2.jpg') }}",
        "{{ asset('img/gallery3.jpg') }}"
    ];
    let current = 0;

    function openModal(idx) {
        current = idx - 1;
        document.getElementById('galleryModal').classList.remove('hidden');
        showImage();
    }
    function closeModal() {
        document.getElementById('galleryModal').classList.add('hidden');
    }
    function showImage() {
        document.getElementById('modalImg').src = images[current];
    }
    function prevImage() {
        current = (current - 1 + images.length) % images.length;
        showImage();
    }
    function nextImage() {
        current = (current + 1) % images.length;
        showImage();
    }
    document.addEventListener('keydown', function(e) {
        if (e.key === "Escape") closeModal();
    });
</script>