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
            <x-icon icon="time" class="text-lime-600" width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor" stroke="none" xmlns="http://www.w3.org/2000/svg"></x-icon>
            <div class="flex flex-col gap-2">
                <p class="font-bold">Open Hours</p>
                <p>Every day | 06.00 AM - 10.00 PM</p>
            </div>
        </div>
        <div class="infobox-accent gap-3">
            <x-icon icon="money" class="text-lime-600" width="24px" height="24px" viewBox="-0.5 0 25 25" fill="currentColor"
                stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-icon>
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
                <x-icon icon="calendar" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-icon>
                <span>Today's event</span></a>
            <a href="/" class="btn-primary p-2">
                <x-icon icon="maps" width="16px" height="16px" viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg"
                    fill="none" stroke="currentColor"></x-icon>
                <span>Our maps</span></a>
        </div>
    </div>
</div>
<div class="flex flex-col items-center mt-25 gap-2">
    scroll more
    <x-icon icon="double-arrow" class="rotate-90" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-icon>
</div>
<img class="absolute h-135 w-[calc((27vw-10rem)*2)] hidden top-40 right-0 object-cover rounded-xl outline-4 outline-lime-600/15 xl:block"
src="img/placeholder.jpg" alt="img-peninsula-island">
<!-- /Landing Page -->

<!-- Video -->
 <div class="relative mt-32 rounded-xl overflow-hidden group cursor-pointer">
    <img class="h-200 w-full object-cover" src="/img/placeholder.jpg" alt="video">
    <div class="absolute inset-0 bg-black/45 group-hover:bg-black/65 transition-colors duration-700"></div>
    <div class="absolute inset-0 flex flex-col gap-5 items-center justify-center">
        <x-icon class="text-white transition-colors duration-700 group-hover:text-lime-600" icon="play" width="48px" height="48px" fill="currentColor" viewBox="-0.5 0 7 7" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></x-icon>
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
                <a onclick="openModal(1)"
                class="bg-white/30 px-5 py-2 rounded-full font-medium hover:bg-lime-600 hover:text-white transition duration-500 flex items-center justify-center group/button">
                Explore
                <x-icon icon="arrow-head" fill="currentColor" viewBox="0 0 24 24" stroke="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform duration-300 group-hover/button:translate-x-1"></x-icon>
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
    
<!-- Spots Map -->
<div class="mt-32">
    <p class="text-3xl font-semibold text-center mb-10 md:text-6xl">
        <span class="text-lime-600">Explore </span>What's Inside
    </p>

    <div class="relative h-[40rem] mx-auto mb-32 overflow-hidden rounded-2xl shadow-lg bg-gray-200">
        <div id="mapContainer" class="w-full h-full cursor-grab active:cursor-grabbing" onmousedown="return false">
            <img src="./img/map.jpeg" alt="Map" class="w-full h-full object-cover">
        </div>

        <div class="absolute bottom-4 right-4 flex flex-col space-y-2">
            <button id="zoomIn" class="bg-white border rounded-full p-2 shadow hover:bg-gray-100">+</button>
            <button id="zoomOut" class="bg-white border rounded-full p-2 shadow hover:bg-gray-100">−</button>
        </div>
    </div>
</div>
<!-- /Spots Map -->

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
        <a href="/" class="btn-primary p-4 mt-5 self-center w-fit md:mt-5">
            <x-icon icon="google-maps" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 48 48"></x-icon>
            <span class="text-sm">Take me to Google Maps</span>
            <x-icon icon="external-link" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-icon>
        </a>
    </div>
    <div class="background-radial-blur transform -translate-y-25"></div>
</div>
<!-- /Where's the Location -->

<!-- Google Maps -->
<div class="relative w-full h-[40rem] mt-10 mx-auto mb-32 overflow-hidden rounded-2xl shadow-lg bg-gray-200">
    <div id="mapContainer" class="w-full h-full cursor-grab active:cursor-grabbing" onmousedown="return false">
        <img src="./img/maps.png" alt="Map" class="w-full h-full object-cover">
    </div>

    {{-- Tombol --}}
    <div class="absolute bottom-4 right-4 flex flex-col space-y-2">
        <button id="zoomIn" class="bg-white border rounded-full p-2 shadow hover:bg-gray-100">+</button>
        <button id="zoomOut" class="bg-white border rounded-full p-2 shadow hover:bg-gray-100">−</button>
    </div>
</div>
<!-- /Google Maps -->

<!--Things You Can Do-->
<div>
    <p class="text-6xl font-semibold mb-9 text-center">
        <span class="text-lime-600">Things</span> You Can Do
    </p>
    <p class="mt-6 max-w-4xl text-xl text-center mx-auto">
        Let's make your free time more meaningful! Here are five easy activity ideas you can do alone or with loved ones to recharge your batteries and improve your quality of life.
    </p>
</div>

<!--Isi activity-->
<div class="grid grid-cols-2 gap-6 mt-6">
    <div class="infobox-accent">
        <div class="m-4">
            <x-icon class="text-lime-600" icon="jogging" width="45" height="45" viewBox="0 0 45 45" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-icon> 
            <h3 class="font-bold mt-2">Jogging</h3>
            <p class="mt-2">Improve your heart health and endurance with morning jogging. 
                Daily jogging routine not only helps burn calories and maintain a healthy weight, 
                but it's also a highly effective way to start the day with high energy, clear your mind, and improve mental focus.</p>
        </div>
    </div>
    <div class="infobox-accent">
        <div class="m-4">
            <x-icon class="text-lime-600" icon="sun-2" width="45" height="45" viewBox="0 0 45 45" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-icon> 
            <h3 class="font-bold mt-2">Sunbathing</h3>
            <p class="mt-2">Take advantage of morning sunlight to stimulate the production of Vitamin D, an essential nutrient that supports immune function and maintains bone density. 
                A brief exposure to gentle sunlight has also been shown to improve your overall mood and reduce the risk of depression.</p>
        </div>
    </div>
    <div class="infobox-accent">
        <div class="m-4">
            <x-icon class="text-lime-600" icon="cycling" width="45" height="45" viewBox="0 0 45 45" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-icon> 
            <h3 class="font-bold mt-2">Cycling</h3>
            <p class="mt-2">Experience the freedom of pedaling through green paths and surrounding neighborhoods. 
                Cycling is an excellent low-impact exercise for building leg strength, increasing lung capacity, and is a fun way to explore new areas.</p>
        </div>
    </div>
    <div class="infobox-accent">
        <div class="m-4">
            <x-icon class="text-lime-600" icon="basket" width="45" height="45" viewBox="0 0 45 45" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-icon> 
            <h3 class="font-bold mt-2">Family Picnic</h3>
            <p class="mt-2">Put your gadgets aside and spend unforgettable time with your loved ones. Prepare your favorite food and enjoy a delicious meal in the park or by the lake, making it the perfect opportunity to bond with your family while breathing in the fresh air.</p>
        </div>
    </div>
</div>
<div class="flex justify-center mt-5 mb-6">
    <div class="infobox-accent max-w-1/2 flex-col">
        <div class="m-4">
            <x-icon class="text-lime-600" icon="yoga" width="45" height="45" viewBox="0 0 45 45" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-icon>
            <h3 class="font-bold mt-2">Yoga</h3>
            <p class="mt-2">Focus your attention on harmonizing your breathing with gentle but purposeful body movements. Regular yoga practice is ideal for increasing joint and muscle flexibility, relieving physical tension caused by stress, and achieving a state of deep mental calm.</p>
        </div>
    </div>
</div>
<!--Isi Activity-->

<script>
const container = document.getElementById('mapContainer');
const img = container.querySelector('img');

let scale = 1,
    posX = 0,
    posY = 0,
    startX = 0,
    startY = 0,
    dragging = false;

function applyTransform() {
    img.style.transform = `translate(${posX}px, ${posY}px) scale(${scale})`;
}

function limitPosition() {
    const rect = container.getBoundingClientRect();
    const imgWidth = img.naturalWidth * scale;
    const imgHeight = img.naturalHeight * scale;

    const maxX = Math.max((imgWidth - rect.width) / 2, 0);
    const maxY = Math.max((imgHeight - rect.height) / 2, 0);

    posX = Math.min(Math.max(posX, -maxX), maxX);
    posY = Math.min(Math.max(posY, -maxY), maxY);
}

// Zoom pakai tombol
document.getElementById('zoomIn').onclick = () => {
    scale = Math.min(scale + 0.2, 4);
    limitPosition();
    applyTransform();
};
document.getElementById('zoomOut').onclick = () => {
    scale = Math.max(scale - 0.2, 1);
    limitPosition();
    applyTransform();
};

// Scroll zoom
img.addEventListener('wheel', e => {
    e.preventDefault();
    const delta = e.deltaY > 0 ? -0.1 : 0.1;
    scale = Math.min(Math.max(1, scale + delta), 4);
    limitPosition();
    applyTransform();
});

// Drag (sekali klik, langsung jalan, lepas langsung diem)
img.addEventListener('mousedown', e => {
    dragging = true;
    startX = e.clientX - posX;
    startY = e.clientY - posY;
    img.style.cursor = 'grabbing';
});

window.addEventListener('mousemove', e => {
    if (!dragging) return;
    posX = e.clientX - startX;
    posY = e.clientY - startY;
    limitPosition();
    applyTransform();

    // kalo gerakan udah kecil banget (berhentiin otomatis)
    clearTimeout(img._stopTimeout);
    img._stopTimeout = setTimeout(() => {
        dragging = false;
        img.style.cursor = 'grab';
    }, 100); // 0.1 detik tanpa gerak = stop drag
});

window.addEventListener('mouseup', () => {
    dragging = false;
    img.style.cursor = 'grab';
});

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

{{-- Maps --}}
{{-- <div class="mt-32">
    <p class="text-6xl font-semibold text-center text-lime-600 mb-10">
        Explore <span class="text-light-primary">What'Inside</span>
    </p>
    <div class="max-w-5xl h-[30rem] bg-slate-300 mx-auto mb-32 bg-cover rounded-2xl"
        style="background-image: url(./img/map.jpeg)">
    </div>
</div> --}}



@endsection

