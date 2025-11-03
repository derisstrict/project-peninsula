<a x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" {{ $attributes }} class="flex flex-col gap-5 p-5 rounded-xl hover:bg-light-primary/5 dark:hover:bg-dark-primary/5 transition-colors">
    <img class="rounded-lg w-100 object-cover" src="{{ $image }}" alt="image">
    <p class="text-lg font-semibold">{{ $title }}</p>
    <div class="bg-sky-500/25 outline-2 outline-sky-500/50 w-fit rounded-lg px-2 text-sm">Other</div>
    <div class="flex items-center justify-center h-5">
        <p class="text-sm mr-auto">{{ $date }}</p>  
        <x-modify-menu></x-modify-menu>          
    </div>
</a>