<a {{ $attributes }} class="flex gap-5 p-5 rounded-xl hover:bg-light-primary/5 dark:hover:bg-dark-primary/5 transition-colors">
    <img class="rounded-lg w-80 h-60 object-cover" src="{{ $image }}" alt="image">
    <div class="flex flex-col gap-2 w-full">
        <p class="text-2xl font-semibold">{{ $title }}</p>
        <div class="bg-lime-500/25 outline-2 outline-lime-500/50 w-fit rounded-lg px-2 text-sm">Other</div>
        <p class="text-sm mr-auto">{{ $date }}</p>        
        <p>{{ Str::limit($slot, 300) }}</p>
        <div class="flex items-center mt-auto gap-3">
            <p class="text-sm ml-auto">Read more</p>
            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M7 17L17 7M17 7H8M17 7V16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>
</a>