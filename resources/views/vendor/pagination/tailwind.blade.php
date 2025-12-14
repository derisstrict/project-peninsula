@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}">

        <div class="flex gap-2 items-center justify-between sm:hidden">

            @if ($paginator->onFirstPage())
                <span class="flex h-10 p-2 items-center justify-center rounded-lg bg-light-primary/10 hover:bg-light-primary/15 dark:bg-dark-primary/10 dark:hover:bg-dark-primary/15 text-gray-400 cursor-not-allowed">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="flex h-10 p-2 items-center justify-center rounded-lg cursor-pointer bg-light-primary/10 hover:bg-light-primary/15 dark:bg-dark-primary/10 dark:hover:bg-dark-primary/15 transition-colors">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="flex h-10 p-2 items-center justify-center rounded-lg cursor-pointer bg-light-primary/10 hover:bg-light-primary/15 dark:bg-dark-primary/10 dark:hover:bg-dark-primary/15 transition-colors">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span class="flex h-10 p-2 items-center justify-center rounded-lg bg-light-primary/10 hover:bg-light-primary/15 dark:bg-dark-primary/10 dark:hover:bg-dark-primary/15 text-gray-400 cursor-not-allowed">
                    {!! __('pagination.next') !!}
                </span>
            @endif

        </div>

        <div class="hidden sm:flex-1 sm:flex sm:gap-2 sm:items-center sm:justify-between">

            <div>
                <p class="text-sm text-light-primary leading-5 dark:text-dark-primary">
                    {!! __('pagination.showing') !!}
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        {!! __('pagination.to') !!}
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('pagination.of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('pagination.results') !!}
                </p>
            </div>

            <div>
                <span class="inline-flex rtl:flex-row-reverse gap-2 rounded-md">

                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                            <span class="flex w-10 h-10 p-2 items-center justify-center rounded-full text-gray-400 bg-light-primary/5 cursor-not-allowed dark:bg-dark-primary/5" aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="flex w-10 h-10 p-2 items-center justify-center rounded-full cursor-pointer bg-light-primary/10 hover:bg-light-primary/15 dark:bg-dark-primary/10 dark:hover:bg-dark-primary/15 transition-colors" aria-label="{{ __('pagination.previous') }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span class="leading-10 tracking-widest">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span class="flex w-10 h-10 p-2 items-center justify-center rounded-full cursor-pointer bg-color-accent/25 text-color-accent font-semibold dark:bg-color-accent/35 transition-colors">{{ $page }}</span>
                                    </span>
                                @else
                                    <a href="{{ $url }}" class="flex w-10 h-10 p-2 items-center justify-center rounded-full cursor-pointer bg-light-primary/10 hover:bg-light-primary/15 dark:bg-dark-primary/10 dark:hover:bg-dark-primary/15 transition-colors" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="flex w-10 h-10 p-2 items-center justify-center rounded-full cursor-pointer bg-light-primary/10 hover:bg-light-primary/15 dark:bg-dark-primary/10 dark:hover:bg-dark-primary/15 transition-colors" aria-label="{{ __('pagination.next') }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    @else
                        <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                            <span class="flex w-10 h-10 p-2 items-center justify-center rounded-full text-gray-400 bg-light-primary/5 cursor-not-allowed dark:bg-dark-primary/5" aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
