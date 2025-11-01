<a x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" {{ $attributes }} class="flex flex-col gap-1 p-5 rounded-xl hover:bg-light-primary/5 dark:hover:bg-dark-primary/5 transition-colors">
    <img class="rounded-lg object-cover" src="{{ $image }}" alt="image">
    <p class="text-lg font-semibold">{{ $slot }}</p>
    <p class="text-sm mr-auto">{{ $date }}</p>
    <p class="mt-2">Starting price</p>
    <div class="flex items-center">
        <p class="font-bold text-2xl mr-auto">IDR <span class="text-lime-600">75.000</span></p>
        <x-icon x-show="open" x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="opacity-0 translate-y-5"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 translate-y-5" icon="arrow" width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-icon>        
    </div>
</a>