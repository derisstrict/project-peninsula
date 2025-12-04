<!--Things You Can Do-->

<div>
    <p class="text-6xl font-semibold mb-9 text-center">
        <span class="text-lime-600">Things</span> You Can Do
    </p>
    <p class="mt-6 max-w-4xl text-xl text-center mx-auto">
        Let's make your free time more meaningful! Here are six easy activity ideas you can do alone or with loved ones to recharge your batteries and improve your quality of life.
    </p>
</div>

<!--Isi activity-->
<div class="grid grid-cols-2 gap-6 mt-6">
    @if(isset($thingstodos) && count($thingstodos))
        @foreach ($thingstodos as $thingstodo)
            <div class="infobox-accent">
                <div class="m-4">
                    <img 
                        src="{{ asset('storage/' . $thingstodo->icon) }}" 
                        alt="{{ $thingstodo->title }}" 
                        class="w-[45px] h-[45px] object-contain mb-2"
                    >
                    <h3 class="font-bold mt-2">{{ $thingstodo->title }}</h3>
                    <p class="mt-2">{{ $thingstodo->deskripsi }}</p>
                </div>
            </div>
        @endforeach
    @else
        <div class="col-span-2 text-center text-gray-400">
            Belum ada data Things To Do.
        </div>
    @endif
</div>
<!--Isi Activity-->