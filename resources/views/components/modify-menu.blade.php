<div class="flex items-center">
    <div x-data="{ openmenu: false }" class="flex mr-0 gap-2 items-center transition-all" x-show="open" x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="opacity-0 translate-y-5"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 translate-y-5">
        <div class="flex items-center gap-2 py-1 px-3 rounded-xl transition-all duration-300 ease-in-out overflow-hidden" :class="openmenu ? '' : 'bg-sky-500/10 text-sky-500'">
            <x-local-icon icon="pencil" width="16px" height="16px" viewBox="0 0 16 16" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>  
            <p class="transition-all duration-300 ease-in-out overflow-hidden" :class="openmenu ? 'opacity-0 translate-x-4 w-0' : 'opacity-100 translate-0 w-auto ml-0'">Edit</p>
        </div>
        <div @mouseenter="openmenu = true" @mouseleave="openmenu = false" class="flex items-center gap-2 py-1 px-3 rounded-xl transition-all duration-300 ease-in-out overflow-hidden hover:text-rose-400 hover:bg-rose-400/10">
            <x-local-icon class="hover:text-rose-400 transition-colors" icon="delete" width="20px" height="20px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
            <p class="transition-all duration-300 ease-in-out overflow-hidden" :class="openmenu ? 'opacity-100 translate-0 w-auto' : 'opacity-0 translate-x-4 w-0 ml-0'">Delete</p>  
        </div>
    </div>
</div>