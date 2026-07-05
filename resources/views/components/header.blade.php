@php
    $isHome = request()->routeIs('welcome');
@endphp

<div
    x-data="{ menuOpen: false, activeMenu: null, closeTimeout: null, mobileMenuOpen: false, showTopbar: false, mobileSubmenu: null }"
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

    {{-- ==================== DESKTOP (md and up) ==================== --}}
    <div class="hidden md:block">

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

            <a href="#" class="flex items-center gap-1 hover:text-[#d1b000]">
                Deurbeslag
                <svg viewBox="0 0 20 20" fill="none" class="w-3 h-3 text-[#d1b000]">
                    <path d="M5 8L10 13L15 8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>

            <div
                @mouseenter="clearTimeout(closeTimeout); activeMenu = 'brievenbussen'; menuOpen = true"
                @mouseleave="closeTimeout = setTimeout(() => { activeMenu = null; menuOpen = false }, 150)"
                class="h-full flex items-center"
            >
                <a href="#" class="flex items-center gap-1 hover:text-[#d1b000]">
                    Brievenbussen
                    <svg
                        viewBox="0 0 20 20" fill="none" class="w-3 h-3 text-[#d1b000] transition-transform duration-200"
                        :class="activeMenu === 'brievenbussen' ? 'rotate-180' : ''"
                    >
                        <path d="M5 8L10 13L15 8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>

                <div
                    x-show="activeMenu === 'brievenbussen'"
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
                @mouseenter="clearTimeout(closeTimeout); activeMenu = 'deursystemen'; menuOpen = true"
                @mouseleave="closeTimeout = setTimeout(() => { activeMenu = null; menuOpen = false }, 150)"
                class="h-full flex items-center"
            >
                <a href="#" class="flex items-center gap-1 hover:text-[#d1b000]">
                    Deursystemen
                    <svg
                        viewBox="0 0 20 20" fill="none" class="w-3 h-3 text-[#d1b000] transition-transform duration-200"
                        :class="activeMenu === 'deursystemen' ? 'rotate-180' : ''"
                    >
                        <path d="M5 8L10 13L15 8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>

                <div
                    x-show="activeMenu === 'deursystemen'"
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

    {{-- ==================== MOBILE (below md) ==================== --}}
    <div class="md:hidden">

        {{-- Mobile top bar --}}
        <div class="flex items-center justify-between px-4 pt-5 pb-4">

            {{-- Logo --}}
            <a href="{{ route('welcome') }}">
                @if($isHome)
                    <img src="{{ asset('images/Hardbrass-white.png') }}" alt="Logo" class="h-6">
                @else
                    <img src="{{ asset('images/Hardbrass-white.png') }}" alt="Logo" class="hidden dark:block h-6">
                    <img src="{{ asset('images/Hardbrass-black.png') }}" alt="Logo" class="block dark:hidden h-6">
                @endif
            </a>

            <div class="flex items-center gap-3">

                {{-- Document icon with badge --}}
                <a href="#" class="relative">
                    <img
                        src="{{ asset('images/document-white.png') }}"
                        alt="Document"
                        class="h-7 {{ $isHome ? '' : 'hidden dark:block' }}"
                    >
                    @if(! $isHome)
                        <img
                            src="{{ asset('images/document-black.png') }}"
                            alt="Document"
                            class="h-7 block dark:hidden"
                        >
                    @endif
                    <span class="absolute -top-1 -right-1 flex items-center justify-center w-4 h-4 rounded-full bg-[#d4b000] text-black text-[10px] font-bold leading-none">1</span>
                </a>

                {{-- Hamburger button --}}
                <button
                    type="button"
                    @click="mobileMenuOpen = true"
                    class="flex items-center justify-center w-10 h-10 bg-[#d4b000]"
                    aria-label="Open menu"
                >
                    <svg viewBox="0 0 20 20" fill="none" class="w-5 h-5">
                        <path d="M3 5H17M3 10H17M3 15H17" stroke="black" stroke-width="1.6" stroke-linecap="round"/>
                    </svg>
                </button>

            </div>

        </div>

        {{-- Mobile search bar --}}
        <div class="px-4 pb-6">
            <div class="flex items-center justify-between pb-3">
                <div class="flex-1">
                    <input
                        type="text"
                        placeholder='Zoek bijvoorbeeld naar "magneet sluiting"'
                        @class([
                            'w-full bg-transparent text-base focus:outline-none',
                            'text-gray-400 placeholder-gray-400/70' => $isHome,
                            'text-gray-500 dark:text-gray-400 placeholder-gray-500/70 dark:placeholder-gray-400/70' => ! $isHome,
                        ])
                    >
                </div>
                <div class="ml-3 shrink-0">
                    <img src="{{ asset('images/search-icon.png') }}" alt="Search" class="h-5 w-5">
                </div>
            </div>
        </div>

    </div>

    {{-- ==================== MOBILE FULLSCREEN MENU ==================== --}}
    <div
        x-show="mobileMenuOpen"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        x-cloak
        @click.away="mobileMenuOpen = false"
        class="md:hidden fixed inset-0 z-[100] flex flex-col transition-colors duration-300"
        :class="showTopbar ? 'bg-white/85 backdrop-blur-md dark:bg-[#45454F]/85' : 'bg-white dark:bg-[#45454F]'"
    >

        {{-- Menu top bar --}}
        <div class="flex items-center justify-between px-4 pt-5 pb-4">

            <a href="{{ route('welcome') }}">
                <img src="{{ asset('images/Hardbrass-white.png') }}" alt="Logo" class="hidden dark:block h-6">
                <img src="{{ asset('images/Hardbrass-black.png') }}" alt="Logo" class="block dark:hidden h-6">
            </a>

            <div class="flex items-center gap-3">

                <button type="button" class="flex items-center justify-center w-10 h-10" aria-label="Zoeken">
                    <img src="{{ asset('images/search-icon.png') }}" alt="Search" class="h-5 w-5">
                </button>

                <button
                    type="button"
                    @click="mobileMenuOpen = false; mobileSubmenu = null"
                    class="flex items-center justify-center w-10 h-10 bg-[#d4b000]"
                    aria-label="Sluit menu"
                >
                    <svg viewBox="0 0 20 20" fill="none" class="w-5 h-5">
                        <path d="M5 5L15 15M15 5L5 15" stroke="black" stroke-width="1.6" stroke-linecap="round"/>
                    </svg>
                </button>

            </div>

        </div>

        {{-- Menu items --}}
        <nav class="flex-1 overflow-y-auto px-4">

            <a href="#" class="flex items-center justify-between py-4 border-b border-gray-100 dark:border-gray-600 text-gray-800 dark:text-gray-100 font-medium">
                Deurbeslag
                <svg viewBox="0 0 20 20" fill="none" class="w-4 h-4 text-[#d1b000]">
                    <path d="M7 4L13 10L7 16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>

            {{-- Brievenbussen accordion --}}
            <div class="border-b border-gray-100 dark:border-gray-600">
                <button
                    type="button"
                    @click="mobileSubmenu = mobileSubmenu === 'brievenbussen' ? null : 'brievenbussen'"
                    class="w-full flex items-center justify-between py-4 text-gray-800 dark:text-gray-100 font-medium"
                >
                    Brievenbussen
                    <svg
                        viewBox="0 0 20 20" fill="none" class="w-4 h-4 text-[#d1b000] transition-transform duration-200"
                        :class="mobileSubmenu === 'brievenbussen' ? 'rotate-90' : ''"
                    >
                        <path d="M7 4L13 10L7 16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div
                    x-show="mobileSubmenu === 'brievenbussen'"
                    x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    x-cloak
                    class="-mx-4 pb-2"
                >
                    @include('components.megamenu-brievenbussen')
                </div>
            </div>

            {{-- Deursystemen accordion --}}
            <div class="border-b border-gray-100 dark:border-gray-600">
                <button
                    type="button"
                    @click="mobileSubmenu = mobileSubmenu === 'deursystemen' ? null : 'deursystemen'"
                    class="w-full flex items-center justify-between py-4 text-gray-800 dark:text-gray-100 font-medium"
                >
                    Deursystemen
                    <svg
                        viewBox="0 0 20 20" fill="none" class="w-4 h-4 text-[#d1b000] transition-transform duration-200"
                        :class="mobileSubmenu === 'deursystemen' ? 'rotate-90' : ''"
                    >
                        <path d="M7 4L13 10L7 16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div
                    x-show="mobileSubmenu === 'deursystemen'"
                    x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    x-cloak
                    class="-mx-4 pb-2"
                >
                    @include('components.megamenu-deursystemen')
                </div>
            </div>

            <a href="#" class="block py-4 border-b border-gray-100 dark:border-gray-600 text-gray-800 dark:text-gray-100 font-medium">Dealers</a>
            <a href="#" class="block py-4 border-b border-gray-100 dark:border-gray-600 text-gray-800 dark:text-gray-100 font-medium">Catalogus</a>
            <a href="#" class="block py-4 border-b border-gray-100 dark:border-gray-600 text-gray-800 dark:text-gray-100 font-medium">Projecten</a>
            <a href="#" class="block py-4 border-b border-gray-100 dark:border-gray-600 text-gray-800 dark:text-gray-100 font-medium">Dealers</a>
            <a href="#" class="block py-4 border-b border-gray-100 dark:border-gray-600 text-gray-800 dark:text-gray-100 font-medium">Contact</a>

        </nav>

        {{-- Toon topbar toggle --}}
        <div class="px-4 py-6 flex justify-center">
            <button
                type="button"
                @click="showTopbar = !showTopbar"
                class="flex items-center gap-2 text-xs text-gray-400"
            >
                <template x-if="!showTopbar">
                    <svg viewBox="0 0 24 24" fill="none" class="w-4 h-4">
                        <path d="M3 3L21 21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                        <path d="M10.58 10.58A2 2 0 0012 14a2 2 0 001.42-.59M9.16 5.19A9.77 9.77 0 0112 5c5 0 9 4 10 7-.31.94-.94 2.1-1.86 3.2M6.4 6.6C4.36 7.9 2.86 9.9 2 12c1 3 5 7 10 7 1.14 0 2.23-.2 3.24-.56" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </template>
                <template x-if="showTopbar">
                    <svg viewBox="0 0 24 24" fill="none" class="w-4 h-4">
                        <path d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7-10-7-10-7z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5"/>
                    </svg>
                </template>
                <span x-text="showTopbar ? 'Verberg topbar' : 'Toon topbar'"></span>
            </button>
        </div>

    </div>

</div>