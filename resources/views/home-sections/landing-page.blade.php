<div class="relative pb-20">
    <div class="relative flex flex-col max-w-4xl gap-8">
        <div class="text-5xl text-center font-semibold md:text-7xl 2xl:text-8xl md:text-start">
            @foreach ($gs->judul_utama as $judul)
                @if ($loop->last)
                    <p class="text-color-accent">
                        {{ $judul }}
                    </p>
                @else
                    <p>
                        {{ $judul }}
                    </p>
                @endif
            @endforeach
        </div>
        <p class="text-md text-center max-w-2xl md:text-2xl md:text-left">{{ __('landing_page.description') }}</p>
        <div class="flex flex-col items-center gap-4 md:flex-row md:items-start">
            <div class="infobox-accent gap-3 text-sm md:text-lg">
                <x-local-icon icon="time" class="text-color-accent" width="24px" height="24px" viewBox="0 0 24 24"
                    fill="currentColor" stroke="none" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
                <div class="flex flex-col gap-2">
                    <p class="font-bold">{{ __('landing_page.open') }}</p>
                    <p>{{ __('landing_page.open_description') }}</p>
                </div>
            </div>
            <div class="infobox-accent gap-3 text-sm md:text-lg">
                <x-local-icon icon="money" class="text-color-accent" width="24px" height="24px"
                    viewBox="-0.5 0 25 25" fill="currentColor" stroke="currentColor"
                    xmlns="http://www.w3.org/2000/svg"></x-local-icon>
                <div class="flex flex-col gap-2">
                    <p class="font-bold">{{ __('landing_page.fee') }}</p>
                    <p>{{ __('landing_page.fee_description') }}</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-2 items-center md:items-start">
            <p class="text-sm">{{ __('landing_page.links') }}</p>
            <div class="flex gap-2">
                <a href="/events" class="btn-primary p-2">
                    <x-local-icon icon="calendar" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
                    <span>{{ __('landing_page.event') }}</span></a>
                <a href="#maps" class="btn-primary p-2">
                    <x-local-icon icon="maps" width="16px" height="16px" viewBox="0 0 192 192"
                        xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"></x-local-icon>
                    <span>{{ __('landing_page.maps') }}</span></a>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 flex flex-col items-center mt-25 gap-2">
        {{ __('landing_page.scroll') }}
        <x-local-icon icon="double-arrow" class="rotate-90" width="16px" height="16px" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
    </div>
    <img class="absolute w-full h-full max-h-[calc(25vw+4rem)] max-w-3xl hidden top-0 right-0 translate-x-90 object-cover rounded-xl outline-4 outline-lime-600/15 xl:block"
    src="{{ asset('/img/' . $gs->gambar_hero) }}" alt="{{ $gs->gambar_hero_alt }}">
    <div class="background-radial-blur -translate-y-80 translate-x-50 hidden xl:block"></div>
</div>
