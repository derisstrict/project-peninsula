@extends('layout.layout')

@section('title', 'The Peninsula Island')

@section('content')
<div class="background-radial-blur transform -translate-y-25"></div>
<!-- Landing Page -->
<div class="relative flex flex-col max-w-4xl gap-8">
    <p class="text-8xl font-semibold">The
        <br><span class="text-lime-600">Peninsula Island</span>
    </p>
    <p class="text-2xl max-w-2xl">A scenic coastal park known for its lush greenery, cultural statues, and
        dramatic ocean views, open to the public and perfect for peaceful walks or events.</p>
    <div class="flex gap-4">
        <div class="infobox-accent gap-3">
            <svg class="text-lime-600" width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor"
                outline="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z" />
                <path
                    d="M12 5C11.4477 5 11 5.44771 11 6V12.4667C11 12.4667 11 12.7274 11.1267 12.9235C11.2115 13.0898 11.3437 13.2343 11.5174 13.3346L16.1372 16.0019C16.6155 16.278 17.2271 16.1141 17.5032 15.6358C17.7793 15.1575 17.6155 14.5459 17.1372 14.2698L13 11.8812V6C13 5.44772 12.5523 5 12 5Z" />
            </svg>
            <div class="flex flex-col gap-2">
                <p class="font-bold">Open Hours</p>
                <p>Every day | 06.00 AM - 10.00 PM</p>
            </div>
        </div>
        <div class="infobox-accent gap-3">
            <svg class="text-lime-600" width="24px" height="24px" viewBox="-0.5 0 25 25" fill="none"
                stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.7003 17.1099V18.22C12.7003 18.308 12.6829 18.395 12.6492 18.4763C12.6156 18.5576 12.5662 18.6316 12.504 18.6938C12.4418 18.7561 12.3679 18.8052 12.2867 18.8389C12.2054 18.8725 12.1182 18.8899 12.0302 18.8899C11.9423 18.8899 11.8551 18.8725 11.7738 18.8389C11.6925 18.8052 11.6187 18.7561 11.5565 18.6938C11.4943 18.6316 11.4449 18.5576 11.4113 18.4763C11.3776 18.395 11.3602 18.308 11.3602 18.22V17.0801C10.9165 17.0072 10.4917 16.8468 10.1106 16.6082C9.72943 16.3695 9.39958 16.0573 9.14023 15.6899C9.04577 15.57 8.99311 15.4226 8.99023 15.27C8.99148 15.1842 9.00997 15.0995 9.04459 15.021C9.0792 14.9425 9.12927 14.8718 9.19177 14.813C9.25428 14.7542 9.32794 14.7087 9.40842 14.679C9.4889 14.6492 9.57455 14.6359 9.66025 14.6399C9.74504 14.6401 9.82883 14.6582 9.90631 14.6926C9.98379 14.7271 10.0532 14.7773 10.1102 14.8401C10.4326 15.2576 10.8657 15.5763 11.3602 15.76V13.21C10.0302 12.69 9.36023 11.9099 9.36023 10.8999C9.38027 10.3592 9.5928 9.84343 9.9595 9.44556C10.3262 9.04769 10.8229 8.79397 11.3602 8.72998V7.62988C11.3602 7.5419 11.3776 7.45482 11.4113 7.37354C11.4449 7.29225 11.4943 7.21847 11.5565 7.15625C11.6187 7.09403 11.6925 7.04466 11.7738 7.01099C11.8551 6.97732 11.9423 6.95996 12.0302 6.95996C12.1182 6.95996 12.2054 6.97732 12.2867 7.01099C12.3679 7.04466 12.4418 7.09403 12.504 7.15625C12.5662 7.21847 12.6156 7.29225 12.6492 7.37354C12.6829 7.45482 12.7003 7.5419 12.7003 7.62988V8.71997C13.0724 8.77828 13.4289 8.91103 13.7485 9.11035C14.0681 9.30967 14.3442 9.57137 14.5602 9.87988C14.6555 9.99235 14.7117 10.1329 14.7202 10.28C14.7229 10.3662 14.7084 10.4519 14.6776 10.5325C14.6467 10.613 14.6002 10.6867 14.5406 10.749C14.481 10.8114 14.4096 10.8613 14.3306 10.8958C14.2516 10.9303 14.1665 10.9487 14.0802 10.95C13.99 10.9475 13.9013 10.9257 13.8202 10.886C13.7391 10.8463 13.6675 10.7897 13.6102 10.72C13.3718 10.4221 13.0575 10.1942 12.7003 10.0601V12.3101L12.9503 12.4099C14.2203 12.9099 15.0103 13.63 15.0103 14.77C14.9954 15.3808 14.7481 15.9629 14.3189 16.3977C13.8897 16.8325 13.3108 17.0871 12.7003 17.1099ZM11.3602 11.73V10.0999C11.1988 10.1584 11.0599 10.2662 10.963 10.408C10.8662 10.5497 10.8162 10.7183 10.8203 10.8899C10.8173 11.0676 10.8669 11.2424 10.963 11.3918C11.0591 11.5413 11.1973 11.6589 11.3602 11.73ZM13.5502 14.8C13.5502 14.32 13.2203 14.03 12.7003 13.8V15.8C12.9387 15.7639 13.1561 15.6427 13.3123 15.459C13.4685 15.2752 13.553 15.0412 13.5502 14.8Z" />
                <path
                    d="M18 3.96997H6C4.93913 3.96997 3.92172 4.39146 3.17157 5.1416C2.42142 5.89175 2 6.9091 2 7.96997V17.97C2 19.0308 2.42142 20.0482 3.17157 20.7983C3.92172 21.5485 4.93913 21.97 6 21.97H18C19.0609 21.97 20.0783 21.5485 20.8284 20.7983C21.5786 20.0482 22 19.0308 22 17.97V7.96997C22 6.9091 21.5786 5.89175 20.8284 5.1416C20.0783 4.39146 19.0609 3.96997 18 3.96997Z"
                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
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
                <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12Z"
                        stroke-width="1.5" />
                    <path opacity="0.5" d="M7 4V2.5" stroke-width="1.5" stroke-linecap="round" />
                    <path opacity="0.5" d="M17 4V2.5" stroke-width="1.5" stroke-linecap="round" />
                    <path opacity="0.5" d="M2 9H22" stroke-width="1.5" stroke-linecap="round" />
                </svg>
                <span>Today's event</span></a>
            <a href="/" class="btn-primary p-2">
                <svg width="16px" height="16px" viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg"
                    fill="none">
                    <path stroke="currentColor" stroke-width="12"
                        d="M96 22a51.88 51.88 0 0 0-36.77 15.303A52.368 52.368 0 0 0 44 74.246c0 16.596 4.296 28.669 20.811 48.898a163.733 163.733 0 0 1 20.053 28.38C90.852 163.721 90.146 172 96 172c5.854 0 5.148-8.279 11.136-20.476a163.723 163.723 0 0 1 20.053-28.38C143.704 102.915 148 90.841 148 74.246a52.37 52.37 0 0 0-15.23-36.943A51.88 51.88 0 0 0 96 22Z" />
                    <circle cx="96" cy="74" r="20" stroke="currentColor" stroke-width="12" />
                </svg>
                <span>Our maps</span></a>
        </div>
    </div>
</div>
<div class="flex flex-col items-center mt-25 gap-2">
    scroll more
    <svg class="rotate-90" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M5.5 5L11.7929 11.2929C12.1834 11.6834 12.1834 12.3166 11.7929 12.7071L5.5 19" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round" />
        <path d="M13.5 5L19.7929 11.2929C20.1834 11.6834 20.1834 12.3166 19.7929 12.7071L13.5 19"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
</div>
<img class="absolute top-40 right-0 rounded-xl outline-4 outline-lime-600/15" width="700"
    src="img/placeholder.jpg" alt="img-peninsula-island">
<!-- /Landing Page -->
    
        {{-- Maps --}}
<div class="mt-32 mb-32">
    <p class="text-6xl font-semibold text-center mb-10">
        <span class="text-lime-600">Explore </span>What'Inside
    </p>

    <div class="relative max-w-5xl h-[30rem] mx-auto mb-32 overflow-hidden rounded-2xl shadow-lg bg-gray-200">
        <div id="mapContainer" class="w-full h-full cursor-grab active:cursor-grabbing" onmousedown="return false">
            <img src="./img/map.jpeg" alt="Map" class="w-full h-full object-cover">
        </div>

        <div class="absolute bottom-4 right-4 flex flex-col space-y-2">
            <button id="zoomIn" class="bg-white border rounded-full p-2 shadow hover:bg-gray-100">+</button>
            <button id="zoomOut" class="bg-white border rounded-full p-2 shadow hover:bg-gray-100">−</button>
        </div>
    </div>
</div>

<!-- Where's the Location -->
<div class="relative flex flex-col">
    <p class="text-6xl font-semibold">
        Where's
        <br><span class="text-lime-600">The Location</span>
    </p>
    <div class="flex flex-col justify-between xl:flex-row xl:items-center">
        <p class="mt-6 max-w-4xl text-xl">
            Peninsula Island is located in Nusa Dua, on the southeastern coast of Bali, Indonesia.
            It sits within the ITDC (Indonesia Tourism Development Corporation) complex,
            a gated resort area known for its luxury hotels and pristine beaches.
        </p>
        <a href="/" class="btn-primary p-4 w-fit md:mt-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48">
                <path fill="#48b564"
                    d="M35.76,26.36h0.01c0,0-3.77,5.53-6.94,9.64c-2.74,3.55-3.54,6.59-3.77,8.06	C24.97,44.6,24.53,45,24,45s-0.97-0.4-1.06-0.94c-0.23-1.47-1.03-4.51-3.77-8.06c-0.42-0.55-0.85-1.12-1.28-1.7L28.24,22l8.33-9.88	C37.49,14.05,38,16.21,38,18.5C38,21.4,37.17,24.09,35.76,26.36z">
                </path>
                <path fill="#fcc60e"
                    d="M28.24,22L17.89,34.3c-2.82-3.78-5.66-7.94-5.66-7.94h0.01c-0.3-0.48-0.57-0.97-0.8-1.48L19.76,15	c-0.79,0.95-1.26,2.17-1.26,3.5c0,3.04,2.46,5.5,5.5,5.5C25.71,24,27.24,23.22,28.24,22z">
                </path>
                <path fill="#2c85eb"
                    d="M28.4,4.74l-8.57,10.18L13.27,9.2C15.83,6.02,19.69,4,24,4C25.54,4,27.02,4.26,28.4,4.74z">
                </path>
                <path fill="#ed5748"
                    d="M19.83,14.92L19.76,15l-8.32,9.88C10.52,22.95,10,20.79,10,18.5c0-3.54,1.23-6.79,3.27-9.3	L19.83,14.92z">
                </path>
                <path fill="#5695f6"
                    d="M28.24,22c0.79-0.95,1.26-2.17,1.26-3.5c0-3.04-2.46-5.5-5.5-5.5c-1.71,0-3.24,0.78-4.24,2L28.4,4.74	c3.59,1.22,6.53,3.91,8.17,7.38L28.24,22z">
                </path>
            </svg>
            <span class="text-sm">Take me to Google Maps</span>
            <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 3C4.5885 3 3 4.5885 3 12C3 19.4115 4.5885 21 12 21C19.4115 21 21 19.4115 21 12" stroke-width="2" stroke-linecap="round"/>
            <path d="M20.5 3.5L15 9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M16 3H20.6717C20.853 3 21 3.14703 21 3.32837V8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
    <div class="background-radial-blur transform -translate-y-25"></div>
</div>
<!-- /Where's the Location -->
 
<div class="relative max-w-6xl h-[30rem] mt-10 mx-auto mb-32 overflow-hidden rounded-2xl shadow-lg bg-gray-200">
    <div id="mapContainer" class="w-full h-full cursor-grab active:cursor-grabbing" onmousedown="return false">
        <img src="./img/maps.png" alt="Map" class="w-full h-full object-cover">
    </div>

    {{-- Tombol --}}
    <div class="absolute bottom-4 right-4 flex flex-col space-y-2">
        <button id="zoomIn" class="bg-white border rounded-full p-2 shadow hover:bg-gray-100">+</button>
        <button id="zoomOut" class="bg-white border rounded-full p-2 shadow hover:bg-gray-100">−</button>
    </div>
</div>

{{-- gatau dah yang ini --}}
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

<!--Things You Can Do-->
<div>
    <p class="text-6xl font-semibold text-lime-600 mb-9 text-center">
        Things <span class="text-light-primary">You Can Do</span>
    </p>
    <p class="mt-6 max-w-4xl text-xl text-center mx-auto">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae placeat repudiandae a iste nihil necessitatibus. Doloribus placeat, at animi veritatis, velit dolorum temporibus, tempore ipsam non facere quas nobis officia.
    </p>
</div>
<!--Isi activity-->
<div class="grid grid-cols-2 gap-4 mt-4">
    <div class="infobox-accent ">
        <div>
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M34.6875 11.25C37.2763 11.25 39.375 9.15133 39.375 6.5625C39.375 3.97367 37.2763 1.875 34.6875 1.875C32.0987 1.875 30 3.97367 30 6.5625C30 9.15133 32.0987 11.25 34.6875 11.25Z" fill="#5EA500"/>
                <path d="M17.8118 7.38309L14.0062 9.76162C13.3362 10.1803 13.125 10.8729 13.125 11.6169C13.125 13.0896 14.7449 13.9875 15.9937 13.2069L19.5347 10.9938C20.1917 10.5832 21.0337 10.6189 21.6534 11.0838L24.375 13.1249L17.4236 20.0763C17.0585 20.4413 16.7241 20.836 16.424 21.2562L13.024 26.0163C12.5306 26.707 11.6347 26.98 10.8399 26.6821L6.01886 24.8742C5.23909 24.5817 4.36065 24.865 3.89871 25.558C3.315 26.4336 3.60782 27.6213 4.53161 28.1251L9.16701 30.6535C11.48 31.9152 14.3588 31.4022 16.0938 29.4194L19.6875 25.3124L23.0627 30.0376C23.87 31.168 23.9865 32.6519 23.3653 33.8943L20.1067 40.4114C19.4835 41.6581 20.3898 43.1249 21.7837 43.1249C22.6663 43.1249 23.5157 42.9687 23.9557 42.0884L27.6517 34.6966C28.5279 32.9438 28.4291 30.8615 27.3905 29.1996L24.375 24.3749L30 18.7499L32.5728 20.4651C34.8873 22.0083 37.4495 21.8916 39.9678 21.0522C40.8399 20.7616 41.25 19.9587 41.25 19.0883C41.25 17.9296 40.2095 17.0483 39.0667 17.2388C37.7724 17.4545 35.8991 18.1778 34.941 16.9005C31.8103 12.7261 28.1152 9.78614 23.5248 7.23594C21.7355 6.24191 19.5476 6.29827 17.8118 7.38309Z" fill="#5EA500"/>
            </svg> 
            <h3 class="font-bold">Jogging</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Minima culpa accusamus quam quo voluptatibus illum eum placeat, 
                tempore vel at est rerum aliquid eos dolor maxime exercitationem? 
                Adipisci, explicabo veritatis?</p>
        </div>
    </div>
    <div class="infobox-accent">
        <div>
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1_347)">
                <path d="M22.4996 11.2129C16.2659 11.2129 11.2126 16.2662 11.2126 22.4998C11.2126 28.7341 16.266 33.7874 22.4996 33.7874C28.7331 33.7874 33.7872 28.7341 33.7872 22.4998C33.7872 16.2662 28.7332 11.2129 22.4996 11.2129Z" fill="#5EA500"/>
                <path d="M45 22.4998C38.135 18.1894 36.3821 14.2811 38.4025 6.59754C30.7196 8.61858 26.8106 6.86437 22.4996 0.000732422C18.1893 6.86437 14.281 8.61858 6.59742 6.59754C8.61856 14.2812 6.86505 18.1894 0 22.4998C6.86505 26.8107 8.61856 30.7197 6.59751 38.4026C14.2811 36.3823 18.1894 38.1358 22.4997 44.9994C26.8107 38.1358 30.7197 36.3823 38.4026 38.4026C36.3821 30.7198 38.135 26.8108 45 22.4998ZM22.4996 37.2452C14.3552 37.2452 7.75494 30.6435 7.75494 22.4998C7.75494 14.3567 14.3552 7.75506 22.4996 7.75506C30.6427 7.75506 37.245 14.3567 37.245 22.4998C37.2451 30.6435 30.6427 37.2452 22.4996 37.2452Z" fill="#5EA500"/>
                </g>
                <defs>
                <clipPath id="clip0_1_347">
                <rect width="45" height="45" fill="white"/>
                </clipPath>
                </defs>
            </svg> 
            <h3 class="font-bold">Sunbathing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima culpa accusamus quam quo voluptatibus illum eum placeat, tempore vel at est rerum aliquid eos dolor maxime exercitationem? Adipisci, explicabo veritatis?</p>
        </div>
    </div>
    <div class="infobox-accent">
        <div>
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M36.5588 26.3269C41.217 26.3269 45 30.1062 45 34.7681C45 39.4263 41.2207 43.2092 36.5588 43.2092C31.897 43.2092 28.1177 39.4299 28.1177 34.7681C28.1177 31.7615 29.4214 29.3921 31.7871 27.898L29.7034 24.397H24.2102C24.7668 23.1958 25.1147 22.1667 25.0452 21.5771H30.6555C30.8862 21.5771 31.1023 21.6394 31.2927 21.7493L31.8823 20.5225L32.0142 20.5078C32.0654 20.5005 32.1204 20.4932 32.1753 20.4858C33.6841 20.2039 34.585 19.2517 34.9585 18.1055C35.1269 17.5891 35.1709 17.0361 35.1013 16.4978C35.0354 15.9741 34.856 15.4614 34.5813 15.0073C34.4604 14.8096 34.3213 14.6228 34.1675 14.447H35.5701V14.4543C35.7495 14.4543 35.9326 14.4946 36.1084 14.5752C36.7456 14.8718 37.0203 15.6299 36.72 16.2671L32.9956 24.1113L34.4238 26.6016C35.1196 26.4148 35.8374 26.3269 36.5588 26.3269ZM12.5024 12.9895L20.2039 7.35718C21.1084 6.79321 22.0825 6.41602 22.8699 6.51855C23.5254 6.60645 24.1296 6.96167 24.679 7.65747C26.3489 9.74121 27.1765 12.6013 28.0994 15.7544L31.3477 15.3735C33.2043 15.2893 33.6914 18.0176 31.7834 18.3765L28.4363 18.7463C26.9421 18.9148 25.8508 19.3286 25.0378 17.644L23.2214 13.0884L17.9956 16.7212C17.6733 17.0581 17.6257 17.3914 17.948 17.7283L21.8701 20.5811C22.3865 20.929 22.8223 21.1743 22.9285 21.8665C23.0896 22.9065 18.6877 29.8169 17.9187 31.1499C16.5674 32.6514 14.0039 31.2927 15.0696 29.4727L18.0505 23.1921C17.1643 22.6648 16.3037 22.1375 15.4761 21.6101C12.7148 19.8596 9.04175 15.8423 12.5024 12.9895ZM29.8828 1.78711C31.8933 1.78711 33.5229 3.41675 33.5229 5.42725C33.5229 7.43774 31.8933 9.06738 29.8828 9.06738C27.8723 9.06738 26.2427 7.43774 26.2427 5.42725C26.2427 3.41675 27.8723 1.78711 29.8828 1.78711ZM15.1062 24.3933H13.3594L12.323 27.4072C12.7002 27.5867 13.0554 27.7881 13.3887 28.0078L13.1396 28.5352C12.7405 29.2786 12.6086 30.011 12.6855 30.6885C12.2095 30.1941 11.6492 29.7803 11.0229 29.4763L8.91357 34.2444C8.63159 34.8889 7.8772 35.1819 7.23267 34.8999C6.58813 34.6179 6.29517 33.8635 6.58081 33.219L8.49975 28.8831C8.48144 28.8831 8.45947 28.8831 8.44116 28.8831C5.18921 28.8831 2.55615 31.5198 2.55615 34.7717C2.55615 38.02 5.19287 40.6567 8.44116 40.6567C11.6931 40.6567 14.3262 38.02 14.3262 34.7717C14.3262 34.2004 14.2456 33.6511 14.0955 33.1274C14.1504 33.1677 14.2053 33.208 14.2639 33.2483C14.7327 33.5669 15.2747 33.7866 15.8386 33.8782C16.1682 33.9331 16.5051 33.9478 16.8457 33.9221C16.8713 34.2004 16.8823 34.4824 16.8823 34.7717C16.8823 39.4299 13.103 43.2129 8.44116 43.2129C3.7793 43.2092 0 39.4263 0 34.7681C0 30.1062 3.7793 26.3269 8.44116 26.3269C8.83301 26.3269 9.21753 26.3525 9.59839 26.4038L11.0962 22.3352C11.2683 21.9397 11.6199 21.676 12.0154 21.5991C12.7698 22.3206 13.5791 22.9431 14.3262 23.4155C14.5532 23.5583 14.8755 23.7598 15.2856 24.0125L15.1062 24.3933ZM8.10425 15.8203H8.95386C8.96851 16.2378 9.0271 16.6589 9.1333 17.0764C9.35303 17.9663 9.77417 18.8196 10.3162 19.6143H8.10791C7.69409 19.6143 7.31323 19.4421 7.03491 19.1675C6.75293 18.8855 6.58081 18.501 6.58081 18.0762V17.3657C6.58081 16.9373 6.75293 16.5491 7.03491 16.2744C7.30591 15.9924 7.68677 15.824 8.10425 15.8203ZM35.9253 28.9124L37.9724 32.0654C38.3569 32.655 38.1885 33.4424 37.5989 33.8269C37.0093 34.2114 36.2219 34.043 35.8374 33.4534L33.446 29.7693C31.7798 30.8093 30.6702 32.6587 30.6702 34.7681C30.6702 38.0164 33.3069 40.6531 36.5588 40.6531C39.8108 40.6531 42.4475 38.0164 42.4475 34.7681C42.4475 31.5161 39.8108 28.8794 36.5588 28.8794C36.3464 28.8757 36.134 28.8904 35.9253 28.9124Z" fill="#5EA500"/>
            </svg> 
            <h3 class="font-bold">Cycling</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima culpa accusamus quam quo voluptatibus illum eum placeat, tempore vel at est rerum aliquid eos dolor maxime exercitationem? Adipisci, explicabo veritatis?</p>
        </div>
    </div>
    <div class="infobox-accent">
        <div>
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M35.625 20.625H9.37496V30C9.37496 33.1066 11.8934 35.625 15 35.625H30C33.1066 35.625 35.625 33.1066 35.625 30V20.625ZM39.375 30C39.375 35.1777 35.1777 39.375 30 39.375H15C9.8223 39.375 5.625 35.1776 5.625 30V18.75C5.625 17.7144 6.46445 16.875 7.49998 16.875H37.5C38.5355 16.875 39.375 17.7144 39.375 18.75V30Z" fill="#5EA500"/>
                <path d="M15 16.875C15 12.7329 18.3579 9.375 22.5 9.375C26.6421 9.37501 30 12.7329 30 16.875H15ZM33.75 16.875C33.75 10.6618 28.7132 5.62505 22.5 5.62504C16.2868 5.62504 11.25 10.6618 11.25 16.875V18.75C11.25 19.7856 12.0894 20.625 13.125 20.625H31.875C32.9105 20.625 33.75 19.7856 33.75 18.75V16.875Z" fill="#5EA500"/>
                <path d="M20.625 31.875V24.375C20.625 23.3394 21.4644 22.5 22.5 22.5C23.5355 22.5 24.375 23.3394 24.375 24.375V31.875C24.375 32.9105 23.5355 33.75 22.5 33.75C21.4644 33.75 20.625 32.9105 20.625 31.875Z" fill="#5EA500"/>
                <path d="M28.125 31.875V24.375C28.125 23.3394 28.9644 22.5 30 22.5C31.0355 22.5 31.875 23.3394 31.875 24.375V31.875C31.875 32.9105 31.0355 33.75 30 33.75C28.9644 33.75 28.125 32.9105 28.125 31.875Z" fill="#5EA500"/>
                <path d="M13.125 31.875V24.375C13.125 23.3394 13.9644 22.5 15 22.5C16.0355 22.5 16.875 23.3394 16.875 24.375V31.875C16.875 32.9105 16.0355 33.75 15 33.75C13.9644 33.75 13.125 32.9105 13.125 31.875Z" fill="#5EA500"/>
            </svg> 
            <h3 class="font-bold">Family Picnic</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima culpa accusamus quam quo voluptatibus illum eum placeat, tempore vel at est rerum aliquid eos dolor maxime exercitationem? Adipisci, explicabo veritatis?</p>
        </div>
    </div>
    <div class="infobox-accent">
        <div>
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1_340)">
                <path d="M42.4293 38.2829C41.8204 37.571 40.3966 34.724 40.3966 34.724C40.3966 34.724 40.6318 34.421 40.3966 33.4012C40.0908 32.0797 38.7694 32.1807 38.465 31.8763C38.1592 31.5712 35.5163 26.7414 35.3129 26.1817C35.1096 25.622 32.872 19.2681 32.872 19.2681C32.1207 15.963 30.7356 14.5905 28.9063 14.1836C27.0923 13.781 26.1099 13.8785 25.2962 13.1666C24.7884 12.7224 24.8064 12.3924 24.8064 11.0523C24.8064 11.0523 25.3544 10.5314 25.7542 9.81114C26.2108 8.98717 26.435 7.79783 26.435 7.79783C26.893 7.61449 26.8986 7.38615 27.0964 6.65833C27.3704 5.65102 27.351 4.96055 26.6191 4.96055C26.7921 1.67572 25.1441 0 22.4999 0C19.857 0 18.209 1.67572 18.3819 4.96063C17.65 4.96063 17.6293 5.6511 17.9045 6.65842C18.1024 7.38624 18.1079 7.61458 18.5646 7.79792C18.5646 7.79792 18.7887 8.98726 19.2468 9.81123C19.6467 10.5314 20.1946 11.0524 20.1946 11.0524C20.1946 12.3925 20.2112 12.7225 19.7034 13.1667C18.8911 13.8786 17.9073 13.7811 16.0947 14.1837C14.2641 14.5905 12.8803 15.9631 12.1291 19.2682C12.1291 19.2682 9.89163 25.6221 9.68825 26.1818C9.48487 26.7415 6.8405 31.5713 6.53614 31.8764C6.23169 32.1808 4.90893 32.0798 4.60448 33.4013C4.36928 34.421 4.60448 34.7241 4.60448 34.7241C4.60448 34.7241 3.18065 37.571 2.57043 38.283C1.96029 38.9942 3.07966 39.5027 3.79087 38.5874C3.87384 38.7113 4.15615 38.8005 4.47581 38.8433C1.99483 41.59 3.40899 45.1683 7.24876 44.9939C10.3966 44.8506 22.4999 42.6547 22.4999 42.6547C22.4999 42.6547 34.603 44.8506 37.7524 44.9938C41.5922 45.1682 43.0064 41.5899 40.524 38.8433C40.8449 38.8004 41.1273 38.7112 41.2102 38.5873C41.9214 39.5026 43.0395 38.9941 42.4293 38.2829ZM16.0947 33.7367C16.0947 33.7367 10.8851 35.2859 7.64031 36.7456C8.30863 35.5016 9.07794 33.808 9.07794 33.808L12.3324 29.1312L14.9256 23.487C14.9256 23.487 15.7392 26.538 15.9924 26.9953C16.2469 27.4526 16.0947 33.7367 16.0947 33.7367ZM28.9063 33.7367C28.9063 33.7367 28.7541 27.4527 29.0073 26.9953C29.2619 26.538 30.0755 23.487 30.0755 23.487L32.6687 29.1312L35.9218 33.808C35.9218 33.808 36.6925 35.5017 37.3608 36.7456C34.116 35.2858 28.9063 33.7367 28.9063 33.7367Z" fill="#5EA500"/>
                </g>
                <defs>
                <clipPath id="clip0_1_340">
                <rect width="45" height="45" fill="white"/>
                </clipPath>
                </defs>
            </svg>
            <h3 class="font-bold">Yoga</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima culpa accusamus quam quo voluptatibus illum eum placeat, tempore vel at est rerum aliquid eos dolor maxime exercitationem? Adipisci, explicabo veritatis?</p>
        </div>
    </div>
</div>
<!--Isi Activity-->



@endsection
