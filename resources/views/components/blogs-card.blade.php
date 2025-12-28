<a x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" {{ $attributes }} class="flex flex-col gap-5 p-5 rounded-xl hover:bg-light-primary/5 dark:hover:bg-dark-primary/7 transition-colors lg:flex-row">
    <img class="rounded-lg w-full h-60 object-cover md:h-80 lg:w-80 lg:h-60" src="{{ $image }}" alt="{{ $alt }}">
    <div class="flex flex-col gap-2 w-full h-full">
        <p class="text-2xl font-semibold">{{ $title }}</p>
        {{-- <div class="bg-color-accent/25 outline-2 outline-color-accent/50 w-fit rounded-lg px-2 text-sm">Other</div> --}}
        <p class="text-sm mr-auto">{{ $date }}</p>        
        <p>{{ Str::limit($slot, 300) }}</p>
        <div x-show="open" x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0" class="hidden items-center mt-auto gap-3 xl:flex">
            <p class="text-sm ml-auto">{{ __('blogs_card.more') }}</p>
            <x-local-icon icon="arrow"  width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
        </div>
        <div class="flex mt-auto gap-3 xl:hidden">
            <p class="text-sm ml-auto">{{ __('blogs_card.more') }}</p>
            <x-local-icon icon="arrow"  width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
        </div>
    </div>
</a>