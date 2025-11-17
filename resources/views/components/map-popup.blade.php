<div x-show="openMapPopup" x-transition:enter="transition ease-in-out duration-100" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" id="overlay" class="fixed inset-0 bg-black/50 z-1000 backdrop-blur-xs dark:bg-black/75">
    <div x-data="{ 
                    imgs: [],
                    active: 0,
                    interval: null,
                    delay: 4000,
                    
                    get runInterval() {
                        return openMapPopup;
                    },
                    
                    start(runInterval) {
                        if (runInterval) {
                            this.interval = setInterval(() => {
                            this.active = (this.active + 1) % this.imgs.length
                            }, this.delay)
                        }
                    }, 

                    reset(runInterval) {
                        clearInterval(this.interval)
                        this.start(runInterval)
                    }
                }" 
        x-init="$watch('images', value => {imgs = value}); $watch('openMapPopup', value => {reset(runInterval)})"
        @click.outside="openMapPopup = false" class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-bglight rounded-2xl shadow-lg w-[90%] max-w-[1000px] max-h-[100vh] scrollbar-hide border-2 border-dark-primary px-8 py-8 dark:bg-bgdark dark:border-light-primary">
        <div class="relative flex flex-row gap-2">
            <p class="text-xl font-semibold text-lime-600">About Place</p>
            <div class="background-radial-blur -translate-y-100"></div>
        </div>

        <div class="flex">
            <h2 class="text-4xl font-semibold mb-1" x-text="title"></h2>
            <button @click="openMapPopup = false" class="btn-primary px-4 py-2 ml-auto cursor-pointer">
            <x-local-icon icon="x-cross" width="16px" height="16px" viewBox="0 0 200 200" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>   
            Close</button>
        </div>

        <div class="mt-5 flex flex-row gap-3" >
            <div class="relative h-fit">
                <div class="relative w-80 h-90 rounded-2xl overflow-hidden">
                    <template x-for="(img, index) in imgs">
                        <img :src="img" :class="active == index ? 'opacity-100' : 'opacity-0'" class="absolute inset-0 h-full w-full object-cover transition duration-700">
                    </template>
                    <div class="absolute w-full h-full bg-[linear-gradient(_rgba(0,0,0,0)_75%,_rgba(0,0,0,1)_110%)]"></div>
                </div>
                <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-1">
                    <template x-for="(img, index) in imgs">
                        <div @click="active = index; reset()" :class="index === active ? 'bg-lime-600' : 'bg-lime-600/60'" class="w-7 h-1 rounded cursor-pointer transition"></div>
                    </template>
                </div>
            </div>

            <div class="flex flex-col gap-5">
                <div class="w-fit max-w-4xl bg-light-primary/5 rounded-xl p-5 dark:bg-dark-primary/5">
                    <p class="text-xl" x-text="desc"></p>
                </div>
                <div class="infobox-accent p-5 gap-3 !w-full">
                    <x-local-icon icon="info" class="text-lime-600" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
                    <div>
                        <p class="font-semibold">Note</p><p x-text="note">{{ $note }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>