<a class="relative transition {{$isActive ? 'font-bold text-color-accent' : 'font-regular hover:text-light-primary/80 dark:hover:text-dark-primary/80'}}" {{ $attributes }}>{{ $slot }}
    <div>
        <x-local-icon icon="arrow-head" class="{{$isActive ? 'absolute inset-0 m-auto rotate-90 translate-y-6 text-light-primary dark:text-dark-primary' : 'hidden' }}" width="16px" height="16px" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></x-local-icon>
    </div>
</a>