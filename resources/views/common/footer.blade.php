<footer class="mt-35 bg-[radial-gradient(circle,_rgba(94,165,0,0.80)_0%,_rgba(94,165,0,0)_80%)] pt-[1px]">
    <div class="py-8 bg-[radial-gradient(circle,_rgba(94,165,0,1)_-900%,_rgba(238,238,238,1)_80%)] dark:bg-[radial-gradient(circle,_rgba(94,165,0,1)_-700%,_rgba(8,16,7,1)_80%)]">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-6 px-6 lg:gap- items-center">
            <div class="flex flex-col items-center md:items-start">
                <p class="flex flex-col text-2xl font-semibold leading-tight items-center md:items-start">The<br>
                    <span class="text-lime-600">Peninsula Island</span>
                </p>
                <p class="text-sm mt-2">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>

            <div class="flex flex-col items-center md:items-start">
                <h4 class="font-semibold text-lime-600 mb-1">Social Media</h4>
                <ul class="flex flex-col gap-2 text-sm">
                    <li class="flex justify-center gap-2 md:justify-start">
                        <x-icon icon="instagram" class="block" width="24px" height="24px" viewBox="2 0 20 20" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-icon>
                        <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-lime-600 transition-colors">Instagram</a>
                    </li>

                    <li class="flex justify-center gap-2 md:justify-start">
                        <x-icon icon="tiktok" class="block" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-icon>
                        <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-lime-600 transition-colors">TikTok</a>
                    </li>

                    <li class="flex justify-center gap-2 md:justify-start">
                        <x-icon icon="mail" class="block" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-icon>
                        <a href="mailto:theemail@gmail.com" class="hover:text-lime-600 transition-colors">theemail@gmail.com</a>

                    </li>
                </ul>
            </div>

            <div class="flex flex-col items-center md:items-start">
                <h4 class="font-semibold text-lime-600 mb-1">Menu</h4>
                <ul class="flex flex-col gap-4 text-sm">
                    <li class="flex items-center gap-2">
                        <a href="#" class="hover:text-lime-600 transition-colors">Home</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <a href="#" class="hover:text-lime-600 transition-colors">Event</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <a href="#" class="hover:text-lime-600 transition-colors">Blogs</a>
                    </li>
                </ul>
            </div>

            <div>
                <div class="flex items-center justify-center gap-3 mb-2 lg:flex-row lg:items-center md:justify-start md:flex-col md:items-start">
                    <h4 class="font-semibold">Language:</h4>
                    <div class="relative" x-data="{ dropLang: false }">
                        <button @click="dropLang = !dropLang" @click.outside="dropLang = false" id="dropdownLanguage" aria-expanded="false" class="relative flex gap-2 bg-light-primary/10 p-2 px-3 rounded-xl items-center cursor-pointer hover:bg-light-primary/15 dark:bg-dark-primary/10 dark:hover:bg-dark-primary/15 transition" type="button">
                            <x-icon icon="language" width="24px" height="24px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-icon>
                            EN
                            <x-icon icon="arrow-head" class="transition-transform" x-bind:class="dropLang ? 'rotate-90' : 'rotate-270'" width="16px" height="16px" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-icon>
                        </button>
                        <div x-show="dropLang" id="lang-menu" class="absolute z-10 right-50 left-0 mt-4 h-10 bg-bglight p-3 gap-2 w-50 h-fit rounded-xl transform -translate-y-45 outline-2 outline-light-primary/10 dark:bg-bgdark dark:outline-dark-primary/10">
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
                <p class="text-sm text-center md:text-left">
                    If you've encountered a broken public facility let us know!<br>
                    <a href="/report" class="font-semibold mt-5 text-lime-600 hover:underline">Make a report</a>
                </p>
            </div>
        </div>
    </div>
</footer>

