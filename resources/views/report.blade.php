@extends('layout.layout')

@section('title', 'The Peninsula Island')

@section('content')
<div class="background-radial-blur left-0 transform -translate-y-25"></div>
<div class="flex gap-8">
    <div class="flex flex-col gap-6">
        <p class="text-5xl font-semibold"><span class="text-lime-600">Broken Facility </span>Report</p>
        <p class="text-xl">If you've seen a broken public facility it'll be appreciated if you can file us a report!</p>
        <div class="infobox-accent gap-3">
            <svg class="text-lime-600" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10" stroke-width="1.5"/>
            <path d="M12 17V11" stroke-width="1.5" stroke-linecap="round"/>
            <circle cx="1" cy="1" r="1" transform="matrix(1 0 0 -1 11 9)"/>
            </svg>
            <div class="flex flex-col gap-2">
                <p class="font-semibold">Note</p>
                <p>Be sure to attach a good enough image and provide a detailed report.</p>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-3">
        <p class="font-bold">Report Form</p>
        <div class="flex gap-3">
            <div class="flex bg-light-primary/5 w-fit items-center pl-3 rounded-xl p-2 gap-2 dark:bg-dark-primary/5">
                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <input type="text" id="name" class="w-80 outline-none" placeholder="Name">
            </div>
            <div class="flex bg-light-primary/5 w-fit items-center pl-3 rounded-xl p-2 gap-2 dark:bg-dark-primary/5">
                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 7.00005L10.2 11.65C11.2667 12.45 12.7333 12.45 13.8 11.65L20 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <rect x="3" y="5" width="18" height="14" rx="2" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <input type="text" id="email" class="w-80 outline-none" placeholder="Email">
            </div>
        </div>
        <div class="flex flex-col bg-light-primary/5 w-full pl-3 rounded-xl p-2 gap-2 dark:bg-dark-primary/5">
            <div class="flex gap-2 items-center">
                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 3H8.2C7.0799 3 6.51984 3 6.09202 3.21799C5.71569 3.40973 5.40973 3.71569 5.21799 4.09202C5 4.51984 5 5.0799 5 6.2V17.8C5 18.9201 5 19.4802 5.21799 19.908C5.40973 20.2843 5.71569 20.5903 6.09202 20.782C6.51984 21 7.0799 21 8.2 21H10M13 3L19 9M13 3V7.4C13 7.96005 13 8.24008 13.109 8.45399C13.2049 8.64215 13.3578 8.79513 13.546 8.89101C13.7599 9 14.0399 9 14.6 9H19M19 9V10M9 17H11.5M9 13H14M9 9H10M14 21L16.025 20.595C16.2015 20.5597 16.2898 20.542 16.3721 20.5097C16.4452 20.4811 16.5147 20.4439 16.579 20.399C16.6516 20.3484 16.7152 20.2848 16.8426 20.1574L21 16C21.5523 15.4477 21.5523 14.5523 21 14C20.4477 13.4477 19.5523 13.4477 19 14L14.8426 18.1574C14.7152 18.2848 14.6516 18.3484 14.601 18.421C14.5561 18.4853 14.5189 18.5548 14.4903 18.6279C14.458 18.7102 14.4403 18.7985 14.405 18.975L14 21Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <p>Report</p>
            </div>
            <textarea type="text" id="name" rows="8" class="w-full  rounded-lg outline-none bg-light-primary/5 p-2 resize-none dark:bg-dark-primary/5"></textarea>
        </div>
        <div class="flex items-center gap-3">
            <button class="btn-primary p-3 w-fit">
                <svg height="16px" width="16px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	            viewBox="0 0 512 512" fill="currentColor" stroke="currentColor"  xml:space="preserve">
                    <g>
                    <path class="st0" d="M454.821,253.582L273.256,435.14c-11.697,11.697-25.124,20.411-39.484,26.235
                        c-21.529,8.729-45.165,10.928-67.755,6.55c-22.597-4.378-44.054-15.25-61.597-32.784c-11.69-11.69-20.396-25.118-26.227-39.484
                        c-8.729-21.529-10.929-45.165-6.55-67.748c4.386-22.597,15.25-44.055,32.778-61.596l203.13-203.13
                        c7.141-7.134,15.299-12.43,24.035-15.969c13.1-5.318,27.516-6.656,41.263-3.994c13.769,2.677,26.798,9.27,37.498,19.963
                        c7.133,7.134,12.423,15.292,15.968,24.035c5.318,13.092,6.657,27.502,3.987,41.264c-2.67,13.762-9.262,26.783-19.955,37.498
                        L213.261,363.064c-2.534,2.528-5.375,4.364-8.436,5.61c-4.571,1.851-9.661,2.335-14.495,1.396
                        c-4.848-0.954-9.355-3.225-13.15-7.006c-2.534-2.534-4.364-5.368-5.603-8.429c-1.865-4.571-2.342-9.668-1.402-14.495
                        c0.947-4.841,3.225-9.355,7.005-13.149l175.521-175.528l-29.616-29.617l-175.528,175.52c-6.536,6.536-11.505,14.182-14.801,22.313
                        c-4.941,12.195-6.166,25.473-3.702,38.202c2.449,12.73,8.686,24.989,18.503,34.799c6.543,6.55,14.182,11.519,22.305,14.809
                        c12.202,4.948,25.473,6.165,38.21,3.702c12.722-2.449,24.989-8.678,34.806-18.511L439.97,195.602
                        c11.142-11.149,19.571-24.113,25.167-37.917c8.394-20.717,10.48-43.314,6.294-64.971c-4.179-21.643-14.73-42.432-31.46-59.155
                        c-11.149-11.142-24.114-19.571-37.918-25.166c-20.717-8.401-43.314-10.48-64.971-6.301c-21.643,4.186-42.431,14.737-59.155,31.468
                        L74.803,236.695c-15.713,15.691-27.552,33.931-35.426,53.352c-11.817,29.154-14.765,60.97-8.863,91.462
                        c5.888,30.478,20.717,59.696,44.29,83.254c15.698,15.713,33.931,27.552,53.36,35.426c29.146,11.811,60.97,14.758,91.455,8.863
                        c30.478-5.895,59.696-20.717,83.254-44.29l181.566-181.564L454.821,253.582z"/>
                    </g>
                </svg>
                Attach images
            </button>            
            <p class="text-xs">max file size 12MB, 5 files.</p>
            <button class="btn-primary p-3 ml-auto">
                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 12C3 4.5885 4.5885 3 12 3C19.4115 3 21 4.5885 21 12C21 19.4115 19.4115 21 12 21C4.5885 21 3 19.4115 3 12Z" stroke-width="2"/>
                <path d="M9 12L10.6828 13.6828V13.6828C10.858 13.858 11.142 13.858 11.3172 13.6828V13.6828L15 10" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Submit</button>
        </div>
    </div>
</div>
@endsection
