<script>
    var popupContent = `
        <div class="flex items-center mr-2 ml-4 my-2">
            <div class="flex flex-col">
                <h1 class="font-bold text-2xl text-lime-600">{{ $title }}</h1>
                <span class="mt-2">{{ Str::limit($desc, 125) }}</span>
                <div @click="openMapPopup = true, title = @js($title), desc = @js($desc), images = {!! $images !!}, note = @js($note)" class="flex items-center gap-2 cursor-pointer bg-lime-600/15 w-fit rounded-lg py-1 px-2 mt-3 transition-colors hover:bg-lime-600/30">
                    <span class="">See more</span>
                    <x-local-icon icon="arrow" width="16px" height="16px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
                </div>
            </div>
            <div class="relative h-fit"
            x-data="{ 
                imgs: {!! $images !!}, 
                active: 0,
                interval: null,
                delay: 4000,
                
                start() {
                    this.interval = setInterval(() => {
                        this.active = (this.active + 1) % this.imgs.length
                    }, this.delay)
                }, 

                reset() {
                    clearInterval(this.interval)
                    this.start()
                }
            }" 
            x-init="start()">
                <div class="relative w-40 h-50 rounded-2xl overflow-hidden">
                    <template x-for="(img, index) in imgs">
                    <img :src="img" :class="active == index ? 'opacity-100' : 'opacity-0'" class="absolute inset-0 h-full w-full object-cover transition duration-700">
                    </template>
                </div>
                <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-1">
                    <template x-for="(img, index) in imgs">
                        <div @click="active = index; reset()" :class="index === active ? 'bg-lime-600' : 'bg-lime-600/60'"" class="w-7 h-1 rounded cursor-pointer transition"></div>
                    </template>
                </div>
            </div>
        </div> 
    `;

    L.marker([{{ $ypos }}, {{ $xpos }}]).addTo(map)
    .bindPopup(popupContent, {
        closeButton: false
    })
</script>