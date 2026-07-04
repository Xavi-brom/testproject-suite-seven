<div class="flex items-center justify-between max-w-7xl mx-auto pt-6 pb-5">
    {{-- logo --}}
    <div>
        <img src="{{ asset('images/Hardbrass-white.png') }}" alt="Logo"
            class="hidden dark:block h-8">

        <img src="{{ asset('images/Hardbrass-black.png') }}" alt="Logo"
            class="block dark:hidden h-8">
    </div>
    
    {{-- search bar --}}
    <div>
        <x-searchbar />
    </div>
    
    {{-- document icon --}}
    <div>
        <img src="{{ asset('images/document-white.png') }}" alt="Logo"
            class="hidden dark:block h-10">

        <img src="{{ asset('images/document-black.png') }}" alt="Logo"
            class="block dark:hidden h-10">
    </div>
</div>