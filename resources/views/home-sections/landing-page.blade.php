<div class="background-radial-blur transform -translate-y-25"></div>
<div class="relative flex flex-col max-w-4xl gap-8">
    <p class="text-6xl font-semibold md:text-8xl">The
        <br><span class="text-lime-600">Peninsula Island</span>
    </p>
    <p class="text-lg max-w-2xl md:text-2xl">{{ __('landing_page.description')}}</p>
    <div class="flex flex-col gap-4 md:flex-row">
        <div class="infobox-accent gap-3">
            <x-local-icon icon="time" class="text-lime-600" width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor" stroke="none" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
            <div class="flex flex-col gap-2">
                <p class="font-bold">{{ __('Open Hours') }}</p>
                <p>{{ $landing_page->jam_operasional }}</p>
            </div>
        </div>
        <div class="infobox-accent gap-3">
            <x-local-icon icon="money" class="text-lime-600" width="24px" height="24px" viewBox="-0.5 0 25 25" fill="currentColor"
                stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
            <div class="flex flex-col gap-2">
                <p class="font-bold">{{ __('Entrance Fee') }}</p>
                <p>Rp. {{ number_format($landing_page->biaya_masuk, 0, '.', '.') }}</p>
            </div>
        </div>
    </div>

    <div class="flex flex-col gap-2">
        <p class="text-sm">Quick links</p>
        <div class="flex gap-2">
            <a href="/" class="btn-primary p-2">
                <x-local-icon icon="calendar" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
                <span>{{ __("Today's event") }}</span></a>
            <a href="/" class="btn-primary p-2">
                <x-local-icon icon="maps" width="16px" height="16px" viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg"
                    fill="none" stroke="currentColor"></x-local-icon>
                <span>{{ __('Our maps') }}</span></a>
        </div>
    </div>
</div>
<div class="flex flex-col items-center mt-25 gap-2">
    {{ __('scroll more') }}
    <x-local-icon icon="double-arrow" class="rotate-90" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
</div>
<img class="absolute h-135 w-[calc((27vw-10rem)*2)] hidden top-40 right-0 object-cover rounded-xl outline-4 outline-lime-600/15 xl:block"
src="{{ asset('/img/' . $landing_page->gambar) }}" alt="{{ $landing_page->alt }}">
