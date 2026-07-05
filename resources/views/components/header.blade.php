@php
    $isHome = request()->routeIs('welcome');
@endphp

<div
    x-data="{ menuOpen: false }"
    @class([
        'w-full transition-colors duration-300 ease-in-out',
        'absolute top-0 left-0 z-50 bg-[#45454F]/70 border-b border-gray-400' => $isHome,
        'bg-white dark:bg-[#45454F] border-b border-gray-500 dark:border-gray-400' => ! $isHome,
    ])
    @if($isHome)
        :class="menuOpen
            ? 'bg-white dark:bg-[#45454F] border-gray-500 dark:border-gray-400'
            : 'bg-[#45454F]/70 border-gray-400'"
    @endif
>

    {{-- Top part-header --}}
    <div class="flex items-center justify-between max-w-7xl mx-auto pt-6 pb-5">

        {{-- Logo --}}
        <a href="{{ route('welcome') }}">
            @if($isHome)
                <img src="{{ asset('images/Hardbrass-white.png') }}" alt="Logo" class="h-8" x-show="!menuOpen" x-cloak>

                <img
                    src="{{ asset('images/Hardbrass-white.png') }}"
                    alt="Logo"
                    class="hidden dark:block h-8"
                    x-show="menuOpen"
                    x-cloak
                >

                <img
                    src="{{ asset('images/Hardbrass-black.png') }}"
                    alt="Logo"
                    class="block dark:hidden h-8"
                    x-show="menuOpen"
                    x-cloak
                >
            @else
                <img
                    src="{{ asset('images/Hardbrass-white.png') }}"
                    alt="Logo"
                    class="hidden dark:block h-8"
                >

                <img
                    src="{{ asset('images/Hardbrass-black.png') }}"
                    alt="Logo"
                    class="block dark:hidden h-8"
                >
            @endif
        </a>

        {{-- Search --}}
        <div class="w-full max-w-md">

            <div class="flex items-center justify-between pb-3">

                <div class="flex-1">
                    <input
                        type="text"
                        placeholder='Zoek bijvoorbeeld naar "magneet sluiting"'
                        @class([
                            'w-full bg-transparent text-lg focus:outline-none transition-colors duration-300',
                            'text-gray-400 placeholder-gray-400/70' => $isHome,
                            'text-gray-500 dark:text-gray-400 placeholder-gray-500/70 dark:placeholder-gray-400/70' => ! $isHome,
                        ])
                        @if($isHome)
                            :class="menuOpen
                                ? 'text-gray-500 dark:text-gray-400 placeholder-gray-500/70 dark:placeholder-gray-400/70'
                                : 'text-gray-400 placeholder-gray-400/70'"
                        @endif
                    >
                </div>

                <div class="ml-3 shrink-0">
                    <img
                        src="{{ asset('images/search-icon.png') }}"
                        alt="Search"
                        class="h-5 w-5"
                    >
                </div>

            </div>

            {{-- underline --}}
            <div
                @class([
                    'border-t-2 transition-colors duration-300',
                    'border-gray-400' => $isHome,
                    'border-gray-500 dark:border-gray-400' => ! $isHome,
                ])
                @if($isHome)
                    :class="menuOpen
                        ? 'border-gray-500 dark:border-gray-400'
                        : 'border-gray-400'"
                @endif
            ></div>

        </div>

        {{-- Document --}}
        <div>

            @if($isHome)

                <img
                    src="{{ asset('images/document-white.png') }}"
                    alt="Document"
                    class="h-10"
                    x-show="!menuOpen"
                    x-cloak
                >

                <img
                    src="{{ asset('images/document-white.png') }}"
                    alt="Document"
                    class="hidden dark:block h-10"
                    x-show="menuOpen"
                    x-cloak
                >

                <img
                    src="{{ asset('images/document-black.png') }}"
                    alt="Document"
                    class="block dark:hidden h-10"
                    x-show="menuOpen"
                    x-cloak
                >

            @else

                <img
                    src="{{ asset('images/document-white.png') }}"
                    alt="Document"
                    class="hidden dark:block h-10"
                >

                <img
                    src="{{ asset('images/document-black.png') }}"
                    alt="Document"
                    class="block dark:hidden h-10"
                >

            @endif

        </div>

    </div>

    {{-- Divider --}}
    <div
        @class([
            'max-w-7xl mx-auto border-t transition-colors duration-300',
            'border-gray-400' => $isHome,
            'border-gray-500 dark:border-gray-400' => ! $isHome,
        ])
        @if($isHome)
            :class="menuOpen
                ? 'border-gray-500 dark:border-gray-400'
                : 'border-gray-400'"
        @endif
    ></div>

    {{-- Navigation --}}
    <div
        @class([
            'flex justify-between items-center max-w-7xl mx-auto h-16 text-[16px] font-medium relative transition-colors duration-300',
            'text-gray-100' => $isHome,
            'text-gray-800 dark:text-gray-100' => ! $isHome,
        ])
        @if($isHome)
            :class="menuOpen
                ? 'text-gray-800 dark:text-gray-100'
                : 'text-gray-100'"
        @endif
    >

        <a href="#" class="hover:text-[#d1b000]">Deurbeslag</a>

        <div
            x-data="{ open: false }"
            @mouseenter="open = true; menuOpen = true"
            @mouseleave="open = false; menuOpen = false"
        >
            <a href="#" class="hover:text-[#d1b000]">Brievenbussen</a>

            <div
                x-show="open"
                x-transition:enter="transition ease-out duration-150"
                x-transition:enter-start="opacity-0 -translate-y-2"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-2"
                x-cloak
                class="absolute left-1/2 -translate-x-1/2 top-full mt-0 w-screen border-t border-gray-500 dark:border-gray-400 shadow-lg text-gray-800 dark:text-gray-100 font-normal"
                style="z-index:60;"
            >
                @include('components.megamenu-brievenbussen')
            </div>
        </div>

        <div
            x-data="{ open: false }"
            @mouseenter="open = true; menuOpen = true"
            @mouseleave="open = false; menuOpen = false"
        >
            <a href="#" class="hover:text-[#d1b000]">Deursystemen</a>

            <div
                x-show="open"
                x-transition:enter="transition ease-out duration-150"
                x-transition:enter-start="opacity-0 -translate-y-2"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-2"
                x-cloak
                class="absolute left-1/2 -translate-x-1/2 top-full mt-0 w-screen border-t border-gray-500 dark:border-gray-400 shadow-lg text-gray-800 dark:text-gray-100 font-normal"
                style="z-index:60;"
            >
                @include('components.megamenu-deursystemen')
            </div>
        </div>

        <a href="#" class="hover:text-[#d1b000]">Catalogus</a>
        <a href="#" class="hover:text-[#d1b000]">Projecten</a>
        <a href="#" class="hover:text-[#d1b000]">Dealers</a>
        <a href="#" class="hover:text-[#d1b000]">Contact</a>

    </div>

</div>