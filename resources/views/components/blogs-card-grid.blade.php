<a x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" {{ $attributes }} class="flex flex-col gap-5 p-5 rounded-xl hover:bg-light-primary/5 dark:hover:bg-dark-primary/5 transition-colors">
    <img class="rounded-lg w-100 object-cover" src="{{ $image }}" alt="image">
    <p class="text-lg font-semibold">{{ $title }}</p>
    <div class="bg-lime-500/25 outline-2 outline-lime-500/50 w-fit rounded-lg px-2 text-sm">Other</div>
    <div class="flex items-center justify-center h-5">
        <p class="text-sm mr-auto">{{ $date }}</p>        
        <x-icon x-show="open" x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 translate-y-5"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 translate-y-5"  icon="arrow"  width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
        </x-icon>      
    </div>
</a>