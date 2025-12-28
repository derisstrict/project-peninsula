<script>
    var popupContent = `
        <div class="flex items-start mr-2 ml-4 my-2 mt-3">
            <div class="flex flex-col max-w-2xl w-full mr-2">
                <h1 class="font-bold text-base text-color-accent">{{ $l10nTitle }}</h1>
                <span class="mt-2">{{ __($l10nTeaser) }}</span>
                @if ($showModal)
                   <div @click='openMapPopup = true, l10nTitle = @json($l10nTitle), l10nDescription = @json($l10nDescription), images = @json($images), l10nNote = @json($l10nNote), alt = @json($alt)' class="flex items-center gap-2 cursor-pointer bg-lime-600/15 w-fit rounded-lg py-1 px-2 mt-3 transition-colors hover:bg-lime-600/30">
                    <span class="">{{ __('maps.see_more') }}</span>
                    <x-local-icon icon="arrow" width="16px" height="16px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
                    </div> 
                @endif
            </div>
            <div class="relative h-fit"
            x-data='{ 
                imgs: @json($images),
                get showSelector() {
                    return this.imgs.length > 1;
                },
                alt: @json($alt), 
                active: 0,
                interval: null,
                delay: 4000,
                
                start() {
                    this.interval = setInterval(() =&gt; {
                        this.active = (this.active + 1) % this.imgs.length
                    }, this.delay)
                }, 

                reset() {
                    clearInterval(this.interval)
                    this.start()
                }
            }' 
            x-init="start()">
                <div class="relative w-40 h-40 rounded-2xl overflow-hidden">
                    <template x-for="(img, index) in imgs">
                    <img :src="'/img/' + img" :class="active == index ? 'opacity-100' : 'opacity-0'" class="absolute inset-0 h-full w-full object-cover transition duration-700" :alt="alt + ' ' + (index + 1)">
                    </template>
                    <div class="absolute w-full h-full bg-[linear-gradient(_rgba(0,0,0,0)_75%,_rgba(0,0,0,1)_110%)]"></div>
                </div>
                <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-1">
                    <template x-for="(img, index) in imgs">
                        <template x-if="showSelector">
                            <div @click="active = index; reset()" :class="index === active ? 'bg-white' : 'bg-white/30'" class="w-7 h-[6px] rounded cursor-pointer transition"></div>
                        </template>
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
