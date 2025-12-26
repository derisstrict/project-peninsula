<!-- Spots Map -->
<div id="maps" x-data='{ l10nTitle: "", l10nDescription: "", l10nNote: "", images: [], alt: "" }' class="mt-32">
    <p class="text-3xl font-semibold text-center mb-10 md:text-6xl">
        {!! __('maps.title_1', [
            'accent' => '<span class="text-color-accent"> ' . __('maps.title_accent_1') . ' </span>',
        ]) !!}
    </p>

    <div class="h-[25rem] mx-auto mb-32 overflow-hidden rounded-2xl shadow-lg bg-gray-200 md:h-[40rem]">
        <div id="mapContainer" class="w-full h-full cursor-grab active:cursor-grabbing">
        </div>
    </div>

    <script>
        var tileSize = 256;
        var pxHeight = 3 * tileSize;
        var pxWidth = 6 * tileSize;
        var zoomLvl = 2 ** 3;
        var widthOffset = 10;
        var projHeight = pxHeight / zoomLvl;
        var projWidth = pxWidth / zoomLvl - widthOffset;
        var bounds = [
            [-projHeight, 0],
            [0, projWidth]
        ];

        var map = L.map('mapContainer', {
            //center: [60, 50],
            crs: L.CRS.Simple,
            center: [projHeight / 2 - 100, projWidth / 2],
            zoom: 4,
            maxBoundsViscosity: 1.0,
            attributionControl: false
        });

        map.setMaxBounds(bounds);

        var tilesPath = "{{ asset('/map/tiles/{z}/{x}/{y}.png') }}";

        L.tileLayer(tilesPath, {
            minZoom: 3,
            maxZoom: 5,
            noWrap: true,
        }).addTo(map);
    </script>

    <div>
        @foreach ($spots as $spot)
            <x-map-marker xpos="{{ $spot->xpos }}" ypos="{{ $spot->ypos }}"
                l10nTitle="{{ __('spots.' . $spot->kunci_judul) }}" l10nTeaser="{{ __('spots.' . $spot->kunci_teaser) }}"
                l10nDescription="{{ __('spots.' . $spot->kunci_keterangan) }}"
                l10nNote="{{ __('spots.' . $spot->kunci_catatan) }}"
                images="{{ asset('img/spots' . $spot->url_media) }}" alt="{{ $spot->alt_gambar }}"></x-map-marker>
        @endforeach
        <x-map-popup></x-map-popup>
    </div>

</div>
<!-- /Spots Map -->

<!-- Where's the Location -->
<div class="relative flex flex-col">
    <p class="text-3xl font-semibold text-center md:text-6xl md:text-start">
        {!! __('maps.title_2', [
            'accent' => '<span class="text-color-accent"> ' . __('maps.title_accent_2') . ' </span>',
        ]) !!}
    </p>
    <div class="flex flex-col justify-between xl:flex-row xl:items-center">
        <p class="mt-6 text-md max-w-4xl text-center md:text-xl md:text-start">
            {{ __('maps.description') }}
        </p>
        <a href="https://www.google.com/maps/place/Peninsula+Island/@-8.8025875,115.2374891,18.12z/data=!4m6!3m5!1s0x2dd242d7ab709d33:0x39de1606c19ad392!8m2!3d-8.8025715!4d115.2385947!16s%2Fg%2F1q6crdh9p!5m1!1e1?entry=ttu&g_ep=EgoyMDI1MTExMS4wIKXMDSoASAFQAw%3D%3D"
            class="btn-primary p-4 mt-5 self-center w-fit md:mt-5">
            <x-local-icon icon="google-maps" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                viewBox="0 0 48 48"></x-local-icon>
            <span class="text-xs md:text-sm">{{ __('maps.button') }}</span>
            <x-local-icon icon="external-link" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
        </a>
    </div>
    <div class="background-radial-blur transform -translate-y-105 -translate-x-80"></div>
</div>
<!-- /Where's the Location -->

<!-- Google Maps -->
<div
    class="relative w-full h-[25rem] mt-10 mx-auto mb-32 overflow-hidden rounded-2xl shadow-lg bg-gray-200 md:h-[40rem]">
    <iframe class="w-full h-full"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1807.793096453511!2d115.2374891438277!3d-8.802587533390318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd242d7ab709d33%3A0x39de1606c19ad392!2sPeninsula%20Island!5e0!3m2!1sen!2sid!4v1763101198309!5m2!1sen!2sid"
        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- /Google Maps -->
