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
        <span class="text-lime-600">Explore </span>What's Inside
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
@endsection

