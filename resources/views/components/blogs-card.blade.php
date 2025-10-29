<a {{ $attributes }} class="flex flex-col gap-2 p-5 rounded-xl hover:bg-light-primary/5">
    <img class="rounded-lg" src="{{ $image }}" alt="image">
    <p class="text-lg font-semibold">{{ $slot }}</p>
    <div class="bg-lime-500/25 outline-2 outline-lime-500/50 w-fit rounded-lg px-2 text-sm">Other</div>
    <div class="flex items-center">
        <p class="text-sm mr-auto">{{ $date }}</p>
        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M7 17L17 7M17 7H8M17 7V16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>
</a>