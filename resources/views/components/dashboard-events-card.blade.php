<a x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" {{ $attributes }} class="flex flex-col gap-1 p-5 rounded-xl hover:bg-light-primary/5 transition-colors">
    <img class="rounded-lg object-cover" src="{{ $image }}" alt="image">
    <p class="text-lg font-semibold">{{ $slot }}</p>
    <p class="text-sm mr-auto">{{ $date }}</p>
    <p class="mt-2">Starting price</p>
    <div class="flex items-center">
        <p class="font-bold text-2xl mr-auto">IDR <span class="text-sky-500">{{ $price }}</span></p>
        <x-modify-menu></x-modify-menu>
    </div>
</a>