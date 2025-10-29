<a {{ $attributes }} class="flex flex-col gap-1 p-5 rounded-xl hover:bg-light-primary/5">
    <img class="rounded-lg" src="{{ $image }}" alt="image">
    <p class="text-lg font-semibold">{{ $slot }}</p>
    <p class="text-sm mr-auto">{{ $date }}</p>
    <p class="mt-2">Starting price</p>
    <div class="flex items-center">
        <p class="font-bold text-2xl mr-auto">IDR <span class="text-lime-600">75.000</span></p>
        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M7 17L17 7M17 7H8M17 7V16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>        
    </div>
</a>