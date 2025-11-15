<?php

use Illuminate\Support\Str;

$a = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum odit architecto similique, ratione adipisci ducimus impedit hic recusandae dicta voluptate? Maxime facere soluta quos eos eaque alias omnis aspernatur exercitationem dolore aperiam, unde harum, dignissimos temporibus deserunt error libero cupiditate similique labore! Et dolore ut beatae, totam quas eius.";

Str::limit($a, 25);

?>

<script>
    var popupContent = `
        <div class="flex items-center mr-2 ml-4 my-2">
            <div class="flex flex-col">
                <h1 class="font-bold text-2xl text-lime-600">{{ $title }}</h1>
                <span class="mt-2">{{ Str::limit($desc, 125) }}</span>
                <div @click="openMapPopup = true" class="flex items-center gap-2 cursor-pointer bg-lime-600/15 w-fit rounded-lg py-1 px-2 mt-3 transition-colors hover:bg-lime-600/30">
                    <span class="">See more</span>
                    <x-local-icon icon="arrow" width="16px" height="16px" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
                </div>
            </div>
            <img src="{{ $img }}" alt="" class="w-35 h-35 ml-3 object-cover rounded-lg">
        </div> 
    `;

    L.marker([{{ $xpos }}, {{ $ypos }}]).addTo(map)
    .bindPopup(popupContent, {
        closeButton: false
    })
</script>