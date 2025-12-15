<div x-cloak x-show="openMapPopup" x-transition:enter="transition ease-in-out duration-100"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-100" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0" id="overlay"
    class="fixed inset-0 bg-black/50 z-1000 backdrop-blur-xs dark:bg-black/75">
    <div x-data='{
        imgs: [],
        active: 0,
        interval: null,
        delay: 4000,
    
        get runInterval() {
            return openMapPopup;
        },
    
        start(runInterval) {
            if (runInterval) {
                this.interval = setInterval(() =&gt; {
                    this.active = (this.active + 1) % this.imgs.length
                }, this.delay)
            }
        },
    
        reset(runInterval) {
            clearInterval(this.interval)
            this.start(runInterval)
        }
    }'
        x-init='$watch("images", value => { imgs = value });
    $watch("openMapPopup", value => { reset(runInterval) })'
        @click.outside="openMapPopup = false, disableScrollOnBody(false)"
        class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-[radial-gradient(circle,_rgba(94,165,0,1)_-600%,_rgba(238,238,238,1)_100%)] rounded-2xl shadow-lg w-[90%] max-w-[1000px] max-h-[100vh] border-2 border-dark-primary px-8 py-4 dark:bg-[radial-gradient(circle,_rgba(94,165,0,1)_-600%,_rgba(8,16,7,1)_100%)] dark:border-light-primary md:py-8">
        <div class="relative flex flex-row gap-2">
            <p class="text-lg font-semibold text-color-accent md:text-xl">{{ __('maps.about_place') }}</p>
        </div>

        <div class="flex flex-col md:flex-row">
            <h2 class="text-2xl font-semibold mb-1 md:text-4xl" x-text="title"></h2>
            <button @click="openMapPopup = false, disableScrollOnBody(false)" class="!hidden btn-primary px-4 py-2 ml-auto cursor-pointer md:!flex">
                <x-local-icon icon="x-cross" width="16px" height="16px" viewBox="0 0 200 200" fill="currentColor"
                    stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
            </button>
        </div>
        <div id="modalContent" class="flex flex-col p-2 overflow-y-auto max-h-[560px] gap-3 lg:flex-row lg:mt-5" onmouseenter="disableScrollOnBody(true)">
            <div class="relative h-fit">
                <div class="relative w-full h-[300px] overflow-hidden rounded-2xl lg:w-80 lg:h-[350px]">
                    <template x-for="(img, index) in imgs">
                        <img :src="'/img/' + img" :class="active == index ? 'opacity-100' : 'opacity-0'"
                            class="absolute inset-0 h-full w-full object-cover transition duration-700"
                            :alt="alt + ' ' + (index + 1)">
                    </template>
                    <div class="absolute w-full h-full bg-[linear-gradient(_rgba(0,0,0,0)_75%,_rgba(0,0,0,1)_110%)]">
                    </div>
                </div>
                <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-1">
                    <template x-for="(img, index) in imgs">
                        <div @click="active = index; reset(runInterval)"
                            :class="index === active ? 'bg-white' : 'bg-white/30'"
                            class="w-7 h-1 rounded cursor-pointer transition"></div>
                    </template>
                </div>
            </div>

            <div class="flex flex-col gap-5">
                <div class="w-fit max-w-4xl bg-light-primary/5 rounded-xl p-5 dark:bg-dark-primary/5">
                    <p class="text-md md:text-xl" x-text="desc"></p>
                </div>
                <div class="infobox-accent p-5 gap-3 !w-full">
                    <x-local-icon icon="info" class="text-color-accent w-fit min-w-[20px] max-w-[24px]" width="24px" height="24px"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        xmlns="http://www.w3.org/2000/svg"></x-local-icon>
                    <div>
                        <p class="text-md font-semibold md:text-xl">{{ __('common.note') }}</p>
                        <p class="text-md md:text-xl" x-text="note"></p>
                    </div>
                </div>
            </div>
            <button @click="openMapPopup = false, disableScrollOnBody(false)" class="btn-primary mt-2 items-center justify-center w-full px-4 py-4 ml-auto cursor-pointer md:!hidden">
                <x-local-icon icon="x-cross" width="16px" height="16px" viewBox="0 0 200 200" fill="currentColor"
                    stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
                <p>Close</p>
            </button>
        </div>
    </div>
</div>
<script>
    // Not the best way to do this, fix when in priority.
    function disableScrollOnBody(disabled) {
        const body = document.querySelector('body');
        body.style.overflow = disabled ? 'hidden' : '';
    }
</script>