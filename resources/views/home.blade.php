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
                <a href="#"
                class="bg-white/30 px-5 py-2 rounded-full font-medium hover:bg-lime-600 hover:text-white transition duration-500 flex items-center justify-center group/button">
                Explore
                <x-icon icon="arrow-head" fill="currentColor" viewBox="0 0 24 24" stroke="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform transition-transform duration-300 group-hover/button:translate-x-1"></x-icon>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- /Gallery -->
    
<!-- Spots Map -->
<div class="mt-32 mb-32">
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
        Let's make your free time more meaningful! Here are five easy activity ideas you can do alone or with loved ones to recharge your batteries and improve your quality of life.
    </p>
</div>
<!--Isi activity-->
<div class="grid grid-cols-2 gap-6 mt-6">
    <div class="infobox-accent">
        <div class="m-4">
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M34.6875 11.25C37.2763 11.25 39.375 9.15133 39.375 6.5625C39.375 3.97367 37.2763 1.875 34.6875 1.875C32.0987 1.875 30 3.97367 30 6.5625C30 9.15133 32.0987 11.25 34.6875 11.25Z" fill="#5EA500"/>
                <path d="M17.8118 7.38309L14.0062 9.76162C13.3362 10.1803 13.125 10.8729 13.125 11.6169C13.125 13.0896 14.7449 13.9875 15.9937 13.2069L19.5347 10.9938C20.1917 10.5832 21.0337 10.6189 21.6534 11.0838L24.375 13.1249L17.4236 20.0763C17.0585 20.4413 16.7241 20.836 16.424 21.2562L13.024 26.0163C12.5306 26.707 11.6347 26.98 10.8399 26.6821L6.01886 24.8742C5.23909 24.5817 4.36065 24.865 3.89871 25.558C3.315 26.4336 3.60782 27.6213 4.53161 28.1251L9.16701 30.6535C11.48 31.9152 14.3588 31.4022 16.0938 29.4194L19.6875 25.3124L23.0627 30.0376C23.87 31.168 23.9865 32.6519 23.3653 33.8943L20.1067 40.4114C19.4835 41.6581 20.3898 43.1249 21.7837 43.1249C22.6663 43.1249 23.5157 42.9687 23.9557 42.0884L27.6517 34.6966C28.5279 32.9438 28.4291 30.8615 27.3905 29.1996L24.375 24.3749L30 18.7499L32.5728 20.4651C34.8873 22.0083 37.4495 21.8916 39.9678 21.0522C40.8399 20.7616 41.25 19.9587 41.25 19.0883C41.25 17.9296 40.2095 17.0483 39.0667 17.2388C37.7724 17.4545 35.8991 18.1778 34.941 16.9005C31.8103 12.7261 28.1152 9.78614 23.5248 7.23594C21.7355 6.24191 19.5476 6.29827 17.8118 7.38309Z" fill="#5EA500"/>
            </svg> 
            <h3 class="font-bold mt-2">Jogging</h3>
            <p class="mt-2 text-light-primary">Improve your heart health and endurance with morning jogging. 
                Daily jogging routine not only helps burn calories and maintain a healthy weight, 
                but it's also a highly effective way to start the day with high energy, clear your mind, and improve mental focus.</p>
        </div>
    </div>
    <div class="infobox-accent">
        <div class="m-4">
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
            <h3 class="font-bold mt-2">Sunbathing</h3>
            <p class="mt-2 text-light-primary">Take advantage of morning sunlight to stimulate the production of Vitamin D, an essential nutrient that supports immune function and maintains bone density. 
                A brief exposure to gentle sunlight has also been shown to improve your overall mood and reduce the risk of depression.</p>
        </div>
    </div>
    <div class="infobox-accent">
        <div class="m-4">
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M36.5588 26.3269C41.217 26.3269 45 30.1062 45 34.7681C45 39.4263 41.2207 43.2092 36.5588 43.2092C31.897 43.2092 28.1177 39.4299 28.1177 34.7681C28.1177 31.7615 29.4214 29.3921 31.7871 27.898L29.7034 24.397H24.2102C24.7668 23.1958 25.1147 22.1667 25.0452 21.5771H30.6555C30.8862 21.5771 31.1023 21.6394 31.2927 21.7493L31.8823 20.5225L32.0142 20.5078C32.0654 20.5005 32.1204 20.4932 32.1753 20.4858C33.6841 20.2039 34.585 19.2517 34.9585 18.1055C35.1269 17.5891 35.1709 17.0361 35.1013 16.4978C35.0354 15.9741 34.856 15.4614 34.5813 15.0073C34.4604 14.8096 34.3213 14.6228 34.1675 14.447H35.5701V14.4543C35.7495 14.4543 35.9326 14.4946 36.1084 14.5752C36.7456 14.8718 37.0203 15.6299 36.72 16.2671L32.9956 24.1113L34.4238 26.6016C35.1196 26.4148 35.8374 26.3269 36.5588 26.3269ZM12.5024 12.9895L20.2039 7.35718C21.1084 6.79321 22.0825 6.41602 22.8699 6.51855C23.5254 6.60645 24.1296 6.96167 24.679 7.65747C26.3489 9.74121 27.1765 12.6013 28.0994 15.7544L31.3477 15.3735C33.2043 15.2893 33.6914 18.0176 31.7834 18.3765L28.4363 18.7463C26.9421 18.9148 25.8508 19.3286 25.0378 17.644L23.2214 13.0884L17.9956 16.7212C17.6733 17.0581 17.6257 17.3914 17.948 17.7283L21.8701 20.5811C22.3865 20.929 22.8223 21.1743 22.9285 21.8665C23.0896 22.9065 18.6877 29.8169 17.9187 31.1499C16.5674 32.6514 14.0039 31.2927 15.0696 29.4727L18.0505 23.1921C17.1643 22.6648 16.3037 22.1375 15.4761 21.6101C12.7148 19.8596 9.04175 15.8423 12.5024 12.9895ZM29.8828 1.78711C31.8933 1.78711 33.5229 3.41675 33.5229 5.42725C33.5229 7.43774 31.8933 9.06738 29.8828 9.06738C27.8723 9.06738 26.2427 7.43774 26.2427 5.42725C26.2427 3.41675 27.8723 1.78711 29.8828 1.78711ZM15.1062 24.3933H13.3594L12.323 27.4072C12.7002 27.5867 13.0554 27.7881 13.3887 28.0078L13.1396 28.5352C12.7405 29.2786 12.6086 30.011 12.6855 30.6885C12.2095 30.1941 11.6492 29.7803 11.0229 29.4763L8.91357 34.2444C8.63159 34.8889 7.8772 35.1819 7.23267 34.8999C6.58813 34.6179 6.29517 33.8635 6.58081 33.219L8.49975 28.8831C8.48144 28.8831 8.45947 28.8831 8.44116 28.8831C5.18921 28.8831 2.55615 31.5198 2.55615 34.7717C2.55615 38.02 5.19287 40.6567 8.44116 40.6567C11.6931 40.6567 14.3262 38.02 14.3262 34.7717C14.3262 34.2004 14.2456 33.6511 14.0955 33.1274C14.1504 33.1677 14.2053 33.208 14.2639 33.2483C14.7327 33.5669 15.2747 33.7866 15.8386 33.8782C16.1682 33.9331 16.5051 33.9478 16.8457 33.9221C16.8713 34.2004 16.8823 34.4824 16.8823 34.7717C16.8823 39.4299 13.103 43.2129 8.44116 43.2129C3.7793 43.2092 0 39.4263 0 34.7681C0 30.1062 3.7793 26.3269 8.44116 26.3269C8.83301 26.3269 9.21753 26.3525 9.59839 26.4038L11.0962 22.3352C11.2683 21.9397 11.6199 21.676 12.0154 21.5991C12.7698 22.3206 13.5791 22.9431 14.3262 23.4155C14.5532 23.5583 14.8755 23.7598 15.2856 24.0125L15.1062 24.3933ZM8.10425 15.8203H8.95386C8.96851 16.2378 9.0271 16.6589 9.1333 17.0764C9.35303 17.9663 9.77417 18.8196 10.3162 19.6143H8.10791C7.69409 19.6143 7.31323 19.4421 7.03491 19.1675C6.75293 18.8855 6.58081 18.501 6.58081 18.0762V17.3657C6.58081 16.9373 6.75293 16.5491 7.03491 16.2744C7.30591 15.9924 7.68677 15.824 8.10425 15.8203ZM35.9253 28.9124L37.9724 32.0654C38.3569 32.655 38.1885 33.4424 37.5989 33.8269C37.0093 34.2114 36.2219 34.043 35.8374 33.4534L33.446 29.7693C31.7798 30.8093 30.6702 32.6587 30.6702 34.7681C30.6702 38.0164 33.3069 40.6531 36.5588 40.6531C39.8108 40.6531 42.4475 38.0164 42.4475 34.7681C42.4475 31.5161 39.8108 28.8794 36.5588 28.8794C36.3464 28.8757 36.134 28.8904 35.9253 28.9124Z" fill="#5EA500"/>
            </svg> 
            <h3 class="font-bold mt-2">Cycling</h3>
            <p class="mt-2 text-light-primary">Experience the freedom of pedaling through green paths and surrounding neighborhoods. 
                Cycling is an excellent low-impact exercise for building leg strength, increasing lung capacity, and is a fun way to explore new areas.</p>
        </div>
    </div>
    <div class="infobox-accent">
        <div class="m-4">
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M35.625 20.625H9.37496V30C9.37496 33.1066 11.8934 35.625 15 35.625H30C33.1066 35.625 35.625 33.1066 35.625 30V20.625ZM39.375 30C39.375 35.1777 35.1777 39.375 30 39.375H15C9.8223 39.375 5.625 35.1776 5.625 30V18.75C5.625 17.7144 6.46445 16.875 7.49998 16.875H37.5C38.5355 16.875 39.375 17.7144 39.375 18.75V30Z" fill="#5EA500"/>
                <path d="M15 16.875C15 12.7329 18.3579 9.375 22.5 9.375C26.6421 9.37501 30 12.7329 30 16.875H15ZM33.75 16.875C33.75 10.6618 28.7132 5.62505 22.5 5.62504C16.2868 5.62504 11.25 10.6618 11.25 16.875V18.75C11.25 19.7856 12.0894 20.625 13.125 20.625H31.875C32.9105 20.625 33.75 19.7856 33.75 18.75V16.875Z" fill="#5EA500"/>
                <path d="M20.625 31.875V24.375C20.625 23.3394 21.4644 22.5 22.5 22.5C23.5355 22.5 24.375 23.3394 24.375 24.375V31.875C24.375 32.9105 23.5355 33.75 22.5 33.75C21.4644 33.75 20.625 32.9105 20.625 31.875Z" fill="#5EA500"/>
                <path d="M28.125 31.875V24.375C28.125 23.3394 28.9644 22.5 30 22.5C31.0355 22.5 31.875 23.3394 31.875 24.375V31.875C31.875 32.9105 31.0355 33.75 30 33.75C28.9644 33.75 28.125 32.9105 28.125 31.875Z" fill="#5EA500"/>
                <path d="M13.125 31.875V24.375C13.125 23.3394 13.9644 22.5 15 22.5C16.0355 22.5 16.875 23.3394 16.875 24.375V31.875C16.875 32.9105 16.0355 33.75 15 33.75C13.9644 33.75 13.125 32.9105 13.125 31.875Z" fill="#5EA500"/>
            </svg> 
            <h3 class="font-bold mt-2">Family Picnic</h3>
            <p class="mt-2 text-light-primary">Put your gadgets aside and spend unforgettable time with your loved ones. Prepare your favorite food and enjoy a delicious meal in the park or by the lake, making it the perfect opportunity to bond with your family while breathing in the fresh air.</p>
        </div>
    </div>
</div>
<div class="flex justify-center mt-5 mb-6">
    <div class="infobox-accent max-w-lg flex-col">
        <div class="m-4">
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
            <h3 class="font-bold mt-2">Yoga</h3>
            <p class="mt-2 text-light-primary">Focus your attention on harmonizing your breathing with gentle but purposeful body movements. Regular yoga practice is ideal for increasing joint and muscle flexibility, relieving physical tension caused by stress, and achieving a state of deep mental calm.</p>
        </div>
    </div>
</div>
    
<!--Isi Activity-->



@endsection

