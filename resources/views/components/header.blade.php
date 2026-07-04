props(['seetrough' => false, 'darkmode' => false, 'lightmode' => false])

<div>
    {{-- top part-header --}}
    <div class="flex items-center justify-between max-w-7xl mx-auto pt-6 pb-5">
        {{-- logo --}}
        <div class="shrink-0">
            <img src="{{ asset('images/Hardbrass-white.png') }}" alt="Logo"
                class="hidden dark:block h-8">

            <img src="{{ asset('images/Hardbrass-black.png') }}" alt="Logo"
                class="block dark:hidden h-8">
        </div>

        {{-- search bar --}}
        <div class="flex-1 max-w-xl mx-20">
            <x-searchbar />
        </div>

        {{-- document icon --}}
        <div class="shrink-0">
            <img src="{{ asset('images/document-white.png') }}" alt="Logo"
                class="hidden dark:block h-10">

            <img src="{{ asset('images/document-black.png') }}" alt="Logo"
                class="block dark:hidden h-10">
        </div>
    </div>

    {{-- divider --}}
    <div class="max-w-7xl mx-auto border-t border-gray-200 dark:border-gray-500">
    </div>

    {{-- bottom part-header --}}
    <div class="flex justify-between items-center max-w-7xl mx-auto h-16 text-[16px] font-medium text-gray-800 dark:text-gray-100">
    </div>
</div>

<div>
    @if(seetrough)
    <div class="bg-[#45454F]/10 backdrop-blur-sm">
        {{-- top part-header --}}
        <div class="">
            <x-top-part-header />
        </div>

        {{-- divider --}}
        <div>

        </div>

        {{-- bottom part-header --}}
        <div>
            <x-bottom-part-header />
        </div>
    </div>
    @endif

    @if(darkmode)
    <div class="bg-[#45454F]">
        {{-- top part-header --}}
        <div>
            <x-top-part-header />
        </div>

        {{-- divider --}}
        <div>

        </div>

        {{-- bottom part-header --}}
        <div>
            <x-bottom-part-header />
        </div>
    </div>
    @endif

    @if(lightmode)
    <div class="bg-white">
        {{-- top part-header --}}
        <div>
            <x-top-part-header />
        </div>

        {{-- divider --}}
        <div>   

        </div>

        {{-- bottom part-header --}}
        <div>
            <x-bottom-part-header />
        </div>
    </div>
    @endif
</div>