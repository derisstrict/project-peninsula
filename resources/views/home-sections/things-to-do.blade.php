<!--Things You Can Do-->

<div class="relative">
    <p class="text-3xl font-semibold mb-9 text-center md:text-6xl">
        {!! __('things_to_do.title', ['accent' => '<span class="text-color-accent"> ' . __('things_to_do.title_accent') . ' </span>']) !!}
    </p>
    <p class="mt-6 max-w-4xl text-md text-center mx-auto md:text-xl">
        {{ __('things_to_do.description') }}
    </p>
    <div class="background-radial-blur -translate-y-60"></div>
</div>

<!--Isi activity-->
@if(isset($thingstodos) && count($thingstodos))
    <div class="grid grid-cols gap-6 mt-6 md:grid-cols-2">
        @foreach ($thingstodos as $thingstodo)
            <div class="infobox-accent">
                <div class="m-2 flex flex-col items-center text-center">
                    <img 
                        src="{{ asset('img/' . $thingstodo->ikon) }}" 
                        alt="{{ __('things_to_do.box_title_' . $loop->iteration) }}" 
                        class="w-[45px] h-[45px] object-contain mb-2"
                    >
                    <h3 class="font-bold mt-2">{{ __('things_to_do.box_title_' . $loop->iteration) }}</h3>
                    <p class="mt-2">{{ __('things_to_do.box_description_' . $loop->iteration .'') }}</p>
                </div>
            </div>
        @endforeach
    </div>
    @else
        <div class="flex justify-center w-full mt-6 text-color-accent">
            Belum ada data Things To Do.
        </div>
    @endif
<!--Isi Activity-->