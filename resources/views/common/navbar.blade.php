<header>
    <div class="flex items-center justify-center p-4">
        <div class="flex gap-12 items-center">
            <a class="hover:text-light-primary/80 dark:hover:text-dark-primary/80 transition" href="/">Home</a>
            <a class="hover:text-light-primary/80 dark:hover:text-dark-primary/80 transition" href="/events">Events</a>
            <a class="hover:text-light-primary/80 dark:hover:text-dark-primary/80 transition" href="/blogs">Blogs</a>
            <div class="relative" x-data="{ dropLang: false }">
                <button @click="dropLang = !dropLang" @click.outside="dropLang = false" id="dropdownLanguage" aria-expanded="false" class="relative flex gap-2 bg-light-primary/10 p-2 px-3 rounded-xl items-center cursor-pointer hover:bg-light-primary/15 dark:bg-dark-primary/10 dark:hover:bg-dark-primary/15 transition" type="button">
                    <x-icon icon="language" width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-icon>
                    EN
                    <x-icon icon="arrow-head" class="transition-transform" x-bind:class="dropLang ? 'rotate-270' : 'rotate-90'" width="16px" height="16px" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-icon>
                </button>
                <div x-show="dropLang" id="lang-menu" class="absolute z-10 right-50 left-0 mt-4 h-10 bg-bglight p-3 gap-2 w-50 h-fit rounded-xl outline-2 outline-light-primary/10 dark:bg-bgdark dark:outline-dark-primary/10">
                    <ul class="flex flex-col">
                        <li>
                            <a href="" class="block p-2 rounded-md hover:bg-light-primary/5 dark:hover:bg-dark-primary/5">English</a>
                        </li>
                        <li>
                            <a href="" class="block p-2 rounded-md hover:bg-light-primary/5 dark:hover:bg-dark-primary/5">Bahasa Indonesia</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <button @click="toggleTheme = !toggleTheme" class="flex ml-4 items-center cursor-pointer hover:text-light-primary/80 dark:hover:text-dark-primary/80 transition">
            <div :class="toggleTheme ? '' : 'hidden'">
                <x-icon icon="moon" width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-icon>  
            </div>
            <div :class="toggleTheme ? 'hidden' : ''">
                <x-icon icon="sun" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-icon>  
            </div>
        </button>
    </div>
</header>