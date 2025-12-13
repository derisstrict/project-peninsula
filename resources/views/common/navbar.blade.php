<header>
    <div class="flex items-center justify-center p-2 bg-dark-primary dark:bg-light-primary md:bg-transparent md:dark:bg-transparent">
        <div class="gap-12 items-center hidden md:flex">
            <x-nav-link href="/" :isActive="Request()->is('/')">{{ __('navbar.navlink_1') }}</x-nav-link>
            <x-nav-link href="/events" :isActive="Request()->is('events')">{{ __('navbar.navlink_2') }}</x-nav-link>
            <x-nav-link href="/blogs" :isActive="Request()->is('blogs')">{{ __('navbar.navlink_3') }}</x-nav-link>
            <div class="relative" x-data="{ dropLang: false }">
                <button @click="dropLang = !dropLang" @click.outside="dropLang = false" id="dropdownLanguage" aria-expanded="false" class="relative flex gap-2 bg-light-primary/10 p-2 px-3 rounded-xl items-center cursor-pointer hover:bg-light-primary/15 dark:bg-dark-primary/10 dark:hover:bg-dark-primary/15 transition" type="button">
                    <x-local-icon icon="language" width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
                    {{ strtoupper(app()->currentLocale()) }}
                    <x-local-icon icon="arrow-head" class="transition-transform rotate-90" x-bind:class="dropLang ? 'rotate-270' : ''" width="16px" height="16px" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
                </button>
                <div x-cloak x-show="dropLang" id="lang-menu" class="absolute z-10 right-50 left-0 mt-4 h-10 bg-bglight p-3 gap-2 w-50 h-fit rounded-xl outline-2 outline-light-primary/10 dark:bg-bgdark dark:outline-dark-primary/10">
                    <ul class="flex flex-col">
                        @foreach (config('app.available_locales') as $locale_name => $available_locale)
                            <li>
                                <a href="/lang/{{ $available_locale }}" class="block p-2 rounded-md hover:bg-light-primary/5 dark:hover:bg-dark-primary/5">{{ $locale_name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <button x-cloak @click="toggleTheme = !toggleTheme" class="flex ml-0 items-center cursor-pointer hover:text-light-primary/80 dark:hover:text-dark-primary/80 transition">
                <div :class="toggleTheme ? '' : 'hidden'">
                    <x-local-icon icon="moon" width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>  
                </div>
                <div :class="toggleTheme ? 'hidden' : ''">
                    <x-local-icon icon="sun" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>  
                </div>
            </button>
        </div>
        <div :class="isHamOpen ? 'text-color-accent bg-light-primary/10 rounded-full' : ''" class="ml-auto p-2 md:hidden">
            <x-local-icon @click="isHamOpen = !isHamOpen" icon="hamburger-menu" width="30px" height="30px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
        </div>            
    </div>
    <div x-show="isHamOpen" @click.outside="isHamOpen = false" class="flex flex-col gap-4 p-4 bg-dark-primary dark:bg-light-primary md:hidden">
        <a href="/" class="{{ Request()->is('/') ? 'bg-color-accent/25 p-2 rounded-md text-color-accent font-bold' : 'p-2' }}">{{ __('navbar.navlink_1') }}</a>
        <a href="/events" class="{{ Request()->is('events') ? 'bg-color-accent/25 p-2 rounded-md text-color-accent font-bold' : 'p-2' }}">{{ __('navbar.navlink_2') }}</a>
        <a href="/blogs" class="{{ Request()->is('blogs') ? 'bg-color-accent/25 p-2 rounded-md text-color-accent font-bold' : 'p-2' }}">{{ __('navbar.navlink_3') }}</a>
        <div class="flex">
            <div class="relative" x-data="{ dropLang: false }">
                <button @click="dropLang = !dropLang" @click.outside="dropLang = false" id="dropdownLanguage" aria-expanded="false" class="relative flex gap-2 bg-light-primary/10 p-2 px-3 rounded-xl items-center cursor-pointer hover:bg-light-primary/15 dark:bg-dark-primary/10 dark:hover:bg-dark-primary/15 transition" type="button">
                    <x-local-icon icon="language" width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
                    {{ strtoupper(app()->currentLocale()) }}
                    <x-local-icon icon="arrow-head" class="transition-transform rotate-90" x-bind:class="dropLang ? 'rotate-270' : ''" width="16px" height="16px" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
                </button>
                <div x-cloak x-show="dropLang" id="lang-menu" class="absolute z-10 right-50 left-0 mt-4 h-10 bg-bglight p-3 gap-2 w-50 h-fit rounded-xl outline-2 outline-light-primary/10 dark:bg-bgdark dark:outline-dark-primary/10">
                    <ul class="flex flex-col">
                        @foreach (config('app.available_locales') as $locale_name => $available_locale)
                            <li>
                                <a href="/lang/{{ $available_locale }}" class="block p-2 rounded-md hover:bg-light-primary/5 dark:hover:bg-dark-primary/5">{{ $locale_name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
                <button x-cloak @click="toggleTheme = !toggleTheme" class="flex ml-4 items-center cursor-pointer hover:text-light-primary/80 dark:hover:text-dark-primary/80 transition">
                    <div :class="toggleTheme ? '' : 'hidden'">
                        <x-local-icon icon="moon" width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>  
                    </div>
                    <div :class="toggleTheme ? 'hidden' : ''">
                        <x-local-icon icon="sun" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>  
                    </div>
            </button>
        </div>  
    </div>
</header>