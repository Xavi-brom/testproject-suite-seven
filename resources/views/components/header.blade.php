@php
    $isHome = request()->routeIs('welcome');
@endphp

<div class="{{ $isHome
    ? 'absolute top-0 left-0 w-full z-50 bg-[#45454F]/50 border-b border-gray-500'
    : 'bg-white dark:bg-[#45454F] border-b border-gray-100 dark:border-gray-500'}}">

    {{-- Top part-header --}}
    <div class="flex items-center justify-between max-w-7xl mx-auto pt-6 pb-5">

        {{-- Logo --}}
        <div>
            @if($isHome)
                <img src="{{ asset('images/Hardbrass-white.png') }}" alt="Logo" class="h-8">
            @else
                <img src="{{ asset('images/Hardbrass-white.png') }}" alt="Logo"
                    class="hidden dark:block h-8">

                <img src="{{ asset('images/Hardbrass-black.png') }}" alt="Logo"
                    class="block dark:hidden h-8">
            @endif
        </div>

        {{-- Search bar --}}
        <div class="w-full max-w-md">
            {{-- text + search icon --}}
            <div class="flex items-center justify-between pb-3">
                
                {{-- text --}}
                <div class="flex-1">
                    <input
                    type="text"
                    placeholder='Zoek bijvoorbeeld naar "magneet sluiting"'
                    class="w-full text-gray-800 dark:text-gray-500 placeholder-gray-200 dark:placeholder-gray-500 text-lg focus:outline-none"
                    {{ $isHome
                    ? 'text-white placeholder-white/70'
                    : 'text-gray-800 dark:text-gray-200 placeholder-gray-400 dark:placeholder-gray-500'
                    }}
                    >
                </div>
                
                {{-- search icon --}}
                <div class="ml-3 shrink-0">
                    <img
                    src="{{ asset('images/search-icon.png') }}"
                    alt="Search"
                    class="h-5 w-5">
                </div>
            </div>
            
            {{-- underline --}}
            <div class="{{ $isHome ? 'border-t-2 border-white/30' : 'border-t-2 border-gray-200 dark:border-gray-500'}}"></div>
        </div>

        {{-- Document icon --}}
        <div>
            @if($isHome)
                <img src="{{ asset('images/document-white.png') }}" alt="Document" class="h-10">
            @else
                <img src="{{ asset('images/document-white.png') }}" alt="Document"
                    class="hidden dark:block h-10">

                <img src="{{ asset('images/document-black.png') }}" alt="Document"
                    class="block dark:hidden h-10">
            @endif
        </div>
    </div>

    {{-- Divider --}}
    <div class="max-w-7xl mx-auto {{ $isHome ? 'border-t border-white/20' : 'border-t border-gray-200 dark:border-gray-500' }}">
    </div>

    {{-- Bottom part-header --}}
    <div class="{{ $isHome 
    ? 'flex justify-between items-center max-w-7xl mx-auto h-16 text-[16px] font-medium text-white' 
    : 'flex justify-between items-center max-w-7xl mx-auto h-16 text-[16px] font-medium text-gray-800 dark:text-gray-100' 
    }}">

        <a href="#" class="hover:text-[#d1b000]">Deurbeslag</a>

        <a href="#" class="hover:text-[#d1b000]">Brievenbussen</a>

        <a href="#" class="hover:text-[#d1b000]">Deursystemen</a>

        <a href="#" class="hover:text-[#d1b000]">Catalogus</a>

        <a href="#" class="hover:text-[#d1b000]">Projecten</a>

        <a href="#" class="hover:text-[#d1b000]">Dealers</a>

        <a href="#" class="hover:text-[#d1b000]">Contact</a>

    </div>
</div>