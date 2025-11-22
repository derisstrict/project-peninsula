<!-- VIDEO -->
<div id="videoSection" class="relative mt-32 rounded-xl overflow-hidden group">
    <video 
        id="myVideo"
        class="h-170 w-full object-cover"
        poster="/img/thumbnail.png">
        <source src="/img/peninsula.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- OVERLAY -->
    <div id="videoOverlay"
        class="absolute inset-0 bg-black/45 transition-opacity duration-500 z-10">
    </div>

    <!-- ICON + TEXT -->
    <div id="videoPlayIcon"
        class="absolute inset-0 flex flex-col gap-1 items-center justify-center transition-all duration-500 
            opacity-100 scale-100 z-20 pointer-events-auto cursor-pointer">

        <svg width="100" height="100" viewBox="0 0 24 24"
            class="text-white group-hover:text-lime-500 transition-all duration-500">
            <path fill="currentColor"
                d="M9 6.5 C8 5.8, 7 6.5, 7 7.7 V16.3 C7 17.5, 8 18.2, 9 17.5 L16.5 12.6 C17.4 12, 17.4 10.9, 16.5 10.3 Z"/>
        </svg>

        <p class="text-white text-lg">Play/Pause</p>
    </div>


    <!-- CUSTOM CONTROLS -->
    <div id="videoControls"
         class="absolute bottom-0 left-0 right-0 p-4 flex items-center gap-4 
                opacity-0 transition-opacity duration-500 z-20">

        <!-- Play / Pause Button -->
        <button id="playPauseBtn" class="text-white text-3xl flex items-center justify-center w-12 h-12">
            <svg id="playPauseIcon" width="40" height="40" viewBox="0 0 24 24" fill="currentColor">
                <path id="playPausePath"
                    d="M9 6.5 C8 5.8, 7 6.5, 7 7.7 V16.3 C7 17.5, 8 18.2, 9 17.5 L16.5 12.6 C17.4 12, 17.4 10.9, 16.5 10.3 Z"/>
            </svg>
        </button>

        <!-- Progress Bar -->
        <input type="range" id="progressBar" value="0" min="0" max="100"
                class="w-full h-2 rounded-lg appearance-none 
                       [&::-webkit-slider-thumb]:w-2
                       [&::-webkit-slider-thumb]:h-2
                       [&::-webkit-slider-thumb]:rounded-full
                       [&::-webkit-slider-thumb]:bg-lime-600"
                style="background: linear-gradient(to right, #65a30d 0%, #65a30d 0%, #fff 0%, #fff 100%);">

        <!-- Volume -->
        <div class="flex items-center gap-2">
            <!-- Volume Icon -->
            <svg id="volumeIcon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                class="text-white">
                <path d="M3 10v4h4l5 5V5l-5 5H3zm13.5 2c0-1.77-1.02-3.29-2.5-4.03v8.06c1.48-.74 2.5-2.26 2.5-4.03z"/>
            </svg>
            <input type="range" id="volumeControl" min="0" max="1" step="0.05" value="1" 
                class="w-full h-2 rounded-lg appearance-none 
                       [&::-webkit-slider-thumb]:w-2
                       [&::-webkit-slider-thumb]:h-2
                       [&::-webkit-slider-thumb]:rounded-full
                       [&::-webkit-slider-thumb]:bg-lime-600"
                style="background: linear-gradient(to right, #65a30d 0%, #65a30d 100%);">
        </div>

        <!-- Fullscreen -->
        <button id="fullscreenBtn" class="text-white text-2xl">
            ⛶
        </button>
    </div>
</div>
<!-- /Video -->

<script>
// ================================
// VIDEO CONTROL — FINAL CLEAN CODE
// ================================

document.addEventListener("DOMContentLoaded", () => {
    const video = document.getElementById("myVideo");
    const container = document.getElementById("videoSection");
    const controls = document.getElementById("videoControls");
    const playPauseBtn = document.getElementById("playPauseBtn");
    const playPausePath = document.getElementById("playPausePath");
    const progressBar = document.getElementById("progressBar");
    const volumeControl = document.getElementById("volumeControl");
    const fullscreenBtn = document.getElementById("fullscreenBtn");
    const videoOverlay = document.getElementById("videoOverlay");
    const videoPlayIcon = document.getElementById("videoPlayIcon");
    const videoPlayPath = videoPlayIcon.querySelector("path");

    let hideTimeout = null;

    function togglePlay() {
        if (video.paused) video.play();
        else video.pause();
    }

    function updateIcons() {
        if (video.paused) {
            const playPath = "M9 6.5 C8 5.8, 7 6.5, 7 7.7 V16.3 C7 17.5, 8 18.2, 9 17.5 L16.5 12.6 C17.4 12, 17.4 10.9, 16.5 10.3 Z";
            playPausePath.setAttribute("d", playPath);
            videoPlayPath.setAttribute("d", playPath);
            videoPlayIcon.style.opacity = "1";
            videoPlayIcon.style.pointerEvents = "auto";
        } else {
            const pausePath = "M8 6 H10 V18 H8 Z M14 6 H16 V18 H14 Z";
            playPausePath.setAttribute("d", pausePath);
            videoPlayPath.setAttribute("d", pausePath);
            videoPlayIcon.style.opacity = "0";
            videoPlayIcon.style.pointerEvents = "none";
        }
    }

    playPauseBtn.addEventListener("click", () => {
        togglePlay();
        updateIcons();
    });

    videoPlayIcon.addEventListener("click", () => {
        togglePlay();
        updateIcons();
    });

    videoOverlay.addEventListener("click", () => {
        togglePlay();
        updateIcons();
    });

    video.addEventListener("play", updateIcons);
    video.addEventListener("pause", updateIcons);

    function showUI() {
        clearTimeout(hideTimeout);
        videoOverlay.style.display = "block";
        videoPlayIcon.style.display = "flex";
        controls.style.opacity = "1";
        requestAnimationFrame(() => {
            videoOverlay.style.opacity = "1";
            videoPlayIcon.style.opacity = "1";
        });
        container.classList.remove("hide-cursor");
    }

    function hideUI() {
        videoOverlay.style.opacity = "0";
        videoPlayIcon.style.opacity = "0";
        controls.style.opacity = "0";
        hideTimeout = setTimeout(() => {
            videoOverlay.style.display = "none";
            videoPlayIcon.style.display = "none";
            container.classList.add("hide-cursor");
        }, 3000);
    }

    video.addEventListener("play", () => {
        hideTimeout = setTimeout(() => hideUI(), 1500);
    });

    video.addEventListener("pause", showUI);

    function updateProgress() {
        const progress = (video.currentTime / video.duration) * 100 || 0;
        progressBar.value = progress;
        progressBar.style.background = `linear-gradient(to right, #65a30d 0%, #65a30d ${progress}%, #fff ${progress}%, #fff 100%)`;
    }

    video.addEventListener("timeupdate", updateProgress);
    progressBar.addEventListener("input", () => {
        video.currentTime = (progressBar.value / 100) * video.duration;
        updateProgress();
    });

    volumeControl.addEventListener("input", () => {
        video.volume = volumeControl.value;
        let progress = volumeControl.value * 100;
        volumeControl.style.background = `linear-gradient(to right, #65a30d 0%, #65a30d ${progress}%, #fff ${progress}%, #fff 100%)`;
    });

    fullscreenBtn.addEventListener("click", () => {
        if (!document.fullscreenElement) container.requestFullscreen();
        else document.exitFullscreen();
    });

    document.addEventListener("fullscreenchange", () => {
        container.classList.remove("hide-cursor");
        showUI();
    });

    container.addEventListener("mousemove", () => {
        showUI();
        if (!video.paused) {
            clearTimeout(hideTimeout);
            hideTimeout = setTimeout(() => hideUI(), 3000);
        }
    });

    container.addEventListener("mouseleave", () => {
        if (!video.paused) hideUI();
    });

    updateIcons();
    updateProgress();
});
</script>

<style>
#videoSection:fullscreen {
    width: 100vw !important;
    height: 100vh !important;
    max-width: 100vw !important;
    max-height: 100vh !important;
    border-radius: 0 !important;
}
#videoSection:fullscreen video {
    width: 100vw !important;
    height: 100vh !important;
    object-fit: contain !important;
    border-radius: 0 !important;
}
#videoSection:fullscreen #videoOverlay,
#videoSection:fullscreen #videoPlayIcon,
#videoSection:fullscreen #videoControls {
    border-radius: 0 !important;
}
.hide-cursor {
    cursor: none !important;
}
#progressBar {
    height: 6px;
    border-radius: 9999px;
    background: #fff;
    outline: none;
}
#progressBar::-webkit-slider-thumb {
    appearance: none;
    width: 18px;
    height: 18px;
    background: #65a30d;
    border-radius: 9999px;
    cursor: pointer;
    border: none;
}
#progressBar::-moz-range-thumb {
    width: 18px;
    height: 18px;
    background: #65a30d;
    border-radius: 9999px;
    cursor: pointer;
    border: none;
}
#volumeControl {
    height: 6px;
    border-radius: 9999px;
    background:  #65a30d;
    outline: none;
}
#volumeControl::-webkit-slider-thumb {
    appearance: none;
    width: 18px;
    height: 18px;
    background: #65a30d;
    border-radius: 9999px;
    cursor: pointer;
    border: none;
}
#volumeControl:-moz-range-thumb {
    width: 18px;
    height: 18px;
    background: #65a30d;
    border-radius: 9999px;
    cursor: pointer;
    border: none;
}
</style>