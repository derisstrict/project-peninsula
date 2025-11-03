<div x-data="{ dropProfile: false }" class="flex flex-col py-1 px-5 mb-15 bg-zinc-200 dark:bg-neutral-900">
    <div class="flex w-full items-center">
        <div class="flex flex-col mr-15">
            <a href="/dashboard" class="text-sm font-semibold leading-[8px] mt-2">Peninsula<br><span class="text-2xl text-sky-500 font-semibold">Dashboard</span></a>
        </div>

        <!-- Hackish way of getting this to work, might be able to optimize it somehow later -->
        <div class="flex gap-10 mt-3 items-center translate-y-1">
            @if (Request()->is('dashboard'))
                <x-rounded-tabs>Overview</x-rounded-tabs>
            @else
                <a href="/dashboard" class="z-5 px-4 py-2 rounded-xl hover:bg-light-primary/5 dark:hover:bg-dark-primary/5 transition-colors">Overview</a>
            @endif
            @if (Request()->is('dashboard/events'))
                <x-rounded-tabs>Events</x-rounded-tabs>
            @else
                <a href="/dashboard/events" class="z-5 px-4 py-2 rounded-xl hover:bg-light-primary/5 dark:hover:bg-dark-primary/5 transition-colors">Events</a>
            @endif
            @if (Request()->is('dashboard/blogs'))
                <x-rounded-tabs>Blogs</x-rounded-tabs>
            @else
                <a href="/dashboard/blogs" class="z-5 px-4 py-2 rounded-xl hover:bg-light-primary/5 dark:hover:bg-dark-primary/5 transition-colors">Blogs</a>
            @endif
        </div>
        <div class="relative ml-auto">
            <button @click="dropProfile = !dropProfile" @click.outside="dropProfile = false" class="flex items-center gap-3 p-2 rounded-lg hover:bg-light-primary/5 dark:hover:bg-dark-primary/5 transition-colors">
                <img src="/img/placeholder.jpg" alt="profile-picture" class="w-8 h-8 rounded-full object-cover">
                <div>
                    <p class="text-sm font-semibold">Razkaa Wolf</p>
                    <p class="text-sky-500 text-xs text-left">Admin</p>
                </div>
                <x-icon icon="arrow-head" class="rotate-90" width="16px" height="16px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor"></x-icon>
            </button>
            <div @click.stop x-show="dropProfile" class="absolute top-10 right-0 z-10 mt-4 h-10 bg-bglight p-3 gap-2 w-50 h-fit rounded-xl outline-2 outline-light-primary/10 dark:bg-bgdark dark:outline-dark-primary/10">
                <div  x-data="{ dropTheme: false, selectedOption: 'light' }" class="flex flex-col items-start gap-2">
                    <button @click="dropTheme = !dropTheme" class="relative flex gap-3 items-center w-full rounded-lg py-1 px-2 cursor-pointer hover:bg-light-primary/5 dark:hover:bg-dark-primary/5 transition-colors">
                        <x-icon icon="theme" width="20px" height="20px" fill="currentColor" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></x-icon>
                        <p>Appearance</p>
                        <x-icon class="ml-auto rotate-90" icon="arrow-head" width="16px" height="16px" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-icon>
                    </button>
                    <div x-show="dropTheme" class="ml-5 flex flex-col gap-3 overflow-hidden">
                        <label>
                            <input type="radio" value="light" x-model="selectedOption" @change="isLight = true">
                            Light
                        </label>
                        <label>
                            <input type="radio" value="dark" x-model="selectedOption" @change="isLight = false">
                            Dark
                        </label>
                    </div>
                    <button class="flex gap-3 items-center w-full rounded-lg py-1 px-2 hover:bg-red-500/5 hover:text-red-400 transition-colors">
                        <x-icon icon="log-out" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-icon>
                        <p>Log out</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>