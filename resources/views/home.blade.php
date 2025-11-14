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
<div id="videoContainer" class="relative mt-32 rounded-xl overflow-hidden group">
    <!-- VIDEO -->
    <video 
        id="myVideo"
        class="h-170 w-full object-cover"
        poster="/img/thumbnail.png">
        <source src="/img/peninsula.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- OVERLAY -->
    <div id="videoOverlay"
        class="absolute inset-0 bg-black/45 transition-opacity duration-500 z-10">
    </div>

    <!-- ICON + TEXT -->
    <div id="videoPlayIcon"
        class="absolute inset-0 flex flex-col gap-1 items-center justify-center transition-all duration-500 
            opacity-100 scale-100 z-20 pointer-events-auto cursor-pointer">

        <svg width="100" height="100" viewBox="0 0 24 24"
            class="text-white group-hover:text-lime-500 transition-all duration-500">
            <path fill="currentColor"
                d="M9 6.5 C8 5.8, 7 6.5, 7 7.7 V16.3 C7 17.5, 8 18.2, 9 17.5 L16.5 12.6 C17.4 12, 17.4 10.9, 16.5 10.3 Z"/>
        </svg>

        <p class="text-white text-lg">Play/Pause</p>
    </div>


    <!-- CUSTOM CONTROLS -->
    <div id="videoControls"
         class="absolute bottom-0 left-0 right-0 p-4 flex items-center gap-4 
                opacity-0 transition-opacity duration-500 z-20">

        <!-- Play / Pause Button -->
        <button id="playPauseBtn" class="text-white text-3xl flex items-center justify-center w-12 h-12">
            <svg id="playPauseIcon" width="40" height="40" viewBox="0 0 24 24" fill="currentColor">
                <path id="playPausePath"
                    d="M9 6.5 C8 5.8, 7 6.5, 7 7.7 V16.3 C7 17.5, 8 18.2, 9 17.5 L16.5 12.6 C17.4 12, 17.4 10.9, 16.5 10.3 Z"/>
            </svg>
        </button>

        <!-- Progress Bar -->
        <input type="range" id="progressBar" value="0" min="0" max="100"
               class="w-full">

        <!-- Volume -->
        <div class="flex items-center gap-2">
            <!-- Volume Icon -->
            <svg id="volumeIcon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                class="text-white">
                <path d="M3 10v4h4l5 5V5l-5 5H3zm13.5 2c0-1.77-1.02-3.29-2.5-4.03v8.06c1.48-.74 2.5-2.26 2.5-4.03z"/>
            </svg>
            <input type="range" id="volumeControl" min="0" max="1" step="0.05" value="1" 
                class="w-28">
        </div>

        <!-- Fullscreen -->
        <button id="fullscreenBtn" class="text-white text-2xl">
            ⛶
        </button>
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
</div>
<div class="flex justify-center mt-5 mb-6">
    <div class="infobox-accent max-w-1/2 flex-col">
        <div class="m-4">
            <x-local-icon class="text-lime-600" icon="yoga" width="45" height="45" viewBox="0 0 45 45" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
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

// Video control
document.addEventListener("DOMContentLoaded", () => {
    const video = document.getElementById("myVideo");
    const controls = document.getElementById("videoControls");
    const playPausePath = document.getElementById("playPausePath");
    const progressBar = document.getElementById("progressBar");
    const volumeControl = document.getElementById("volumeControl");
    const fullscreenBtn = document.getElementById("fullscreenBtn");
    const container = document.getElementById("videoContainer");
    const videoOverlay = document.getElementById("videoOverlay");
    const videoPlayIcon = document.getElementById("videoPlayIcon");

    //fungsi toggle supaya dipakai di beberapa tempat
function togglePlay() {
    if (video.paused) {
        video.play();
    } else {
        video.pause();
    }
}

//hubungkan toggle ke beberapa elemen
videoOverlay.onclick = togglePlay;
videoPlayIcon.onclick = togglePlay;
playPauseBtn.onclick = togglePlay; // pastikan btn juga toggle (jika belum)

//FUNCTION untuk show / hide UI
let hideTimeout;

function showUI() {
    clearTimeout(hideTimeout);

    videoOverlay.style.display = "block";
    videoPlayIcon.style.display = "flex";

    requestAnimationFrame(() => {
        videoOverlay.style.opacity = "1";
        videoPlayIcon.style.opacity = "1";
    });
}

function hideUI() {
    videoOverlay.style.opacity = "0";
    videoPlayIcon.style.opacity = "0";

    setTimeout(() => {
        videoOverlay.style.display = "none";
        videoPlayIcon.style.display = "none";
    }, 2000);
}

//EVENT: VIDEO PLAY
video.addEventListener("play", () => {
    // Set icon menjadi pause
    playPausePath.setAttribute("d", "M7 6h4v12H7zM13 6h4v12h-4z");

    clearTimeout(hideTimeout);

    // UI hilang setelah 3 detik
    hideTimeout = setTimeout(() => {
        hideUI();
    }, 2000);
});

//EVENT: VIDEO PAUSE
video.addEventListener("pause", () => {

    //Tampilkan overlay + icon dulu
    showUI();

    //Icon play
    playPausePath.setAttribute("d",
        "M9 6.5 C8 5.8, 7 6.5, 7 7.7 V16.3 C7 17.5, 8 18.2, 9 17.5 L16.5 12.6 C17.4 12, 17.4 10.9, 16.5 10.3 Z"
    );

    //UI hilang otomatis
    hideTimeout = setTimeout(() => {
        hideUI();
    }, 2000);
});

//Saat berhenti (PAUSE), hover harus bisa munculkan play icon
container.addEventListener("mouseenter", () => {
    if (video.paused) {
        showUI(); 
    }
});

//EVENT: MOUSEMOVE (hover video) ===
container.addEventListener("mousemove", () => {
    if (!video.paused) { 
        showUI(); 
    }
});

container.addEventListener("mousemove", () => {
    showUI();
});

//EVENT: MOUSE LEAVE
container.addEventListener("mouseleave", () => {
    if (!video.paused) {
        hideTimeout = setTimeout(() => {
            hideUI();
        }, 500);
    }
});


    //Tampilkan controls saat hover
    container.addEventListener("mousemove", () => {
        controls.style.opacity = "1";
        clearTimeout(controls._hideTimeout);
        controls._hideTimeout = setTimeout(() => {
            controls.style.opacity = "0";
        }, 2000);
    });
    container.addEventListener("mouseleave", () => {
        controls.style.opacity = "0";
    });

    //Play/Pause
    playPauseBtn.onclick = () => {
        if (video.paused) {
            video.play();
        } else {
            video.pause();
        }
    };
    video.addEventListener("play", () => {
        //Pause icon 
        playPausePath.setAttribute("d", "M7 6h4v12H7zM13 6h4v12h-4z");
    });
    video.addEventListener("pause", () => {
        //Play icon 
        playPausePath.setAttribute("d", "M9 6.5 C8 5.8, 7 6.5, 7 7.7 V16.3 C7 17.5, 8 18.2, 9 17.5 L16.5 12.6 C17.4 12, 17.4 10.9, 16.5 10.3 Z");
    });

    //Progress Bar
    video.addEventListener("timeupdate", () => {
        progressBar.value = (video.currentTime / video.duration) * 100 || 0;
    });
    progressBar.addEventListener("input", () => {
        video.currentTime = (progressBar.value / 100) * video.duration;
    });

    //Volume
    volumeControl.addEventListener("input", () => {
        video.volume = volumeControl.value;
    });

    //Fullscreen
    fullscreenBtn.onclick = () => {
        if (document.fullscreenElement) {
            document.exitFullscreen();
        } else {
            container.requestFullscreen();
        }
    };
});
</script>


{{-- <div class="mt-32">
    <p class="text-6xl font-semibold text-center text-lime-600 mb-10">
        Explore <span class="text-light-primary">What'Inside</span>
    </p>
    <div class="max-w-5xl h-[30rem] bg-slate-300 mx-auto mb-32 bg-cover rounded-2xl"
        style="background-image: url(./img/map.jpeg)">
    </div>
</div> --}}



@endsection

