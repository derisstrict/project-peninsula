<div id="galleryModal" class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/50 backdrop-blur-[2px] hidden">

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

    <img id="modalImg" src="" alt="Gallery Popup" 
        class="max-h-[80vh] max-w-[90vw] rounded-xl shadow-lg transition-all duration-300">

    <button onclick="nextImage()" 
        class="absolute w-10 h-10 right-4 md:right-12 cursor-pointer flex items-center justify-center
            text-black z-[60] bg-white/80 rounded-full border-2 border-transparent
            hover:bg-black/20 hover:scale-110 hover:border-white
            backdrop-blur-[2px] transition duration-300 ease-in-out group">
        <svg class="w-6 h-6 text-black group-hover:text-lime-400 group-hover:translate-x-1 transition duration-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <polyline points="9 6 15 12 9 18" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>

</div>
<!-- /Gallery -->

<script>
    //galery
    var imgsModal = [];
    let currentImgsModal = 0;

    function openModal(imgArr, idx) {
        imgsModal = imgArr;
        currentImgsModal = idx;
        document.getElementById('galleryModal').classList.remove('hidden');

        // scroll lock (open modal)
        document.body.classList.add('overflow-hidden');

        showImage();
    }

    function closeModal() {
        document.getElementById('galleryModal').classList.add('hidden');

        // scroll open (exit modal)
        document.body.classList.remove('overflow-hidden');
    }

    function showImage() {
        document.getElementById('modalImg').src = 'img/' + imgsModal[currentImgsModal];
    }

    function prevImage() {
        currentImgsModal = (currentImgsModal - 1 + imgsModal.length) % imgsModal.length;
        showImage();
    }

    function nextImage() {
        currentImgsModal = (currentImgsModal + 1) % imgsModal.length;
        showImage();
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === "Escape") closeModal();
    });
</script>