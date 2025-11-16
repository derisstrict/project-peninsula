<!-- Spots Map -->
<div x-data="{ title: '', desc: '', note: '', images: '' }"  class="mt-32">
    <p class="text-3xl font-semibold text-center mb-10 md:text-6xl">
        <span class="text-lime-600">Explore </span>What's Inside
    </p>

    <div class="h-[40rem] mx-auto mb-32 overflow-hidden rounded-2xl shadow-lg bg-gray-200">
        <div id="mapContainer" class="w-full h-full cursor-grab active:cursor-grabbing">
        </div>
    </div>

    <script>
    var tileSize = 256;
    var pxHeight = 3 * tileSize;
    var pxWidth = 6 * tileSize;
    var zoomLvl = 2**3;
    var widthOffset = 10;
    var projHeight = pxHeight / zoomLvl;
    var projWidth = pxWidth / zoomLvl - widthOffset;
    var bounds = [[-projHeight, 0], [0, projWidth]];
    
    var map = L.map('mapContainer', {
        //center: [60, 50],
        crs: L.CRS.Simple,
        center: [projHeight/2-100, projWidth/2],
        zoom: 4,
        maxBoundsViscosity: 1.0,
        attributionControl: false
    });

    map.setMaxBounds(bounds);

    var tilesPath = "{{ asset('storage/map/tiles/{z}/{x}/{y}.png') }}";

    L.tileLayer(tilesPath, {
        minZoom: 3,
        maxZoom: 5,
        noWrap: true,
    }).addTo(map);
    </script>

    <div>
        @foreach ($spots as $spot)
            <x-map-marker xpos="{{ $spot->xpos }}" ypos="{{ $spot->ypos }}" title="{{ $spot->title }}" desc="{{ $spot->keterangan }}" note="{{ $spot->catatan }}" images="{{ $spot->url_media }}"></x-map-marker>
        @endforeach
        <x-map-popup></x-map-popup>
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
        <a href="https://www.google.com/maps/place/Peninsula+Island/@-8.8025875,115.2374891,18.12z/data=!4m6!3m5!1s0x2dd242d7ab709d33:0x39de1606c19ad392!8m2!3d-8.8025715!4d115.2385947!16s%2Fg%2F1q6crdh9p!5m1!1e1?entry=ttu&g_ep=EgoyMDI1MTExMS4wIKXMDSoASAFQAw%3D%3D" class="btn-primary p-4 mt-5 self-center w-fit md:mt-5">
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
    <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1807.793096453511!2d115.2374891438277!3d-8.802587533390318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd242d7ab709d33%3A0x39de1606c19ad392!2sPeninsula%20Island!5e0!3m2!1sen!2sid!4v1763101198309!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- /Google Maps -->