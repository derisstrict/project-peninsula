<!--Things You Can Do-->
<div>
    <p class="text-6xl font-semibold mb-9 text-center">
        {!! __('things_to_do.title', ['accent' => '<span class="text-lime-600"> ' . __('things_to_do.title_accent') . ' </span>']) !!}
    </p>
    <p class="mt-6 max-w-4xl text-xl text-center mx-auto">
        {{ __('things_to_do.description') }}
    </p>
</div>

<!--Isi activity-->
<div class="grid grid-cols-2 gap-6 mt-6">
    <div class="infobox-accent">
        <div class="m-4">
            <x-local-icon class="text-lime-600" icon="jogging" width="45" height="45" viewBox="0 0 45 45" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon> 
            <h3 class="font-bold mt-2">{{ __('things_to_do.box_title_1') }}</h3>
            <p class="mt-2">{{ __('things_to_do.box_description_1') }}</p>
        </div>
    </div>
    <div class="infobox-accent">
        <div class="m-4">
            <x-local-icon class="text-lime-600" icon="sun-2" width="45" height="45" viewBox="0 0 45 45" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon> 
            <h3 class="font-bold mt-2">{{ __('things_to_do.box_title_2') }}</h3>
            <p class="mt-2">{{ __('things_to_do.box_description_2') }}</p>
        </div>
    </div>
    <div class="infobox-accent">
        <div class="m-4">
            <x-local-icon class="text-lime-600" icon="cycling" width="45" height="45" viewBox="0 0 45 45" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon> 
            <h3 class="font-bold mt-2">{{ __('things_to_do.box_title_3') }}</h3>
            <p class="mt-2">{{ __('things_to_do.box_description_3') }}</p>
        </div>
    </div>
    <div class="infobox-accent">
        <div class="m-4">
            <x-local-icon class="text-lime-600" icon="basket" width="45" height="45" viewBox="0 0 45 45" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon> 
            <h3 class="font-bold mt-2">{{ __('things_to_do.box_title_4') }}</h3>
            <p class="mt-2">{{ __('things_to_do.box_description_4') }}</p>
        </div>
    </div>
        <div class="infobox-accent">
        <div class="m-4">
            <x-local-icon class="text-lime-600" icon="yoga" width="45" height="45" viewBox="0 0 45 45" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
            <h3 class="font-bold mt-2">{{ __('things_to_do.box_title_5') }}</h3>
            <p class="mt-2">{{ __('things_to_do.box_description_5') }}</p>
        </div>
    </div>
        <div class="infobox-accent">
        <div class="m-4">
            <x-local-icon class="text-lime-600" icon="children-games" width="45" height="45" viewBox="0 0 45 45" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon> 
            <h3 class="font-bold mt-2">{{ __('things_to_do.box_title_6') }}</h3>
            <p class="mt-2">{{ __('things_to_do.box_description_6') }}</p>
        </div>
    </div>
</div>
<!--Isi Activity-->