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
@if(isset($thingstodos) && count($thingstodos))
    <div class="grid grid-cols-2 gap-6 mt-6">
        @foreach ($thingstodos as $thingstodo)
            <div class="infobox-accent">
                <div class="m-2 flex flex-col items-center text-center">
                    <img 
                        src="{{ asset('img/' . $thingstodo->icon) }}" 
                        alt="{{ $thingstodo->title }}" 
                        class="w-[45px] h-[45px] object-contain mb-2"
                    >
                    <h3 class="font-bold mt-2">{{ $thingstodo->title }}</h3>
                    <p class="mt-2">{{ $thingstodo->deskripsi }}</p>
                </div>
            </div>
        @endforeach
    </div>
    @else
        <div class="flex justify-center w-full mt-6 text-lime-600">
            Belum ada data Things To Do.
        </div>
    @endif
<!--Isi Activity-->