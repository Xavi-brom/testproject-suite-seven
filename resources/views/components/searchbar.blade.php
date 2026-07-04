<div class="w-full max-w-md">
    {{-- text + search icon --}}
    <div class="flex items-center justify-between pb-3">
        {{-- text --}}
        <div class="flex-1">
            <input
                type="text"
                placeholder='Zoek bijvoorbeeld naar "magneet sluiting"'
                class="w-full bg-transparent text-gray-200 dark:text-gray-500 placeholder-gray-200 dark:placeholder-gray-500 text-lg focus:outline-none"
            >
        </div>

        {{-- search icon --}}
        <div class="ml-3 shrink-0">
            <img
                src="{{ asset('images/search-icon.png') }}"
                alt="Search"
                class="h-5 w-5"
            >
        </div>
    </div>

    {{-- underline --}}
    <div class="max-w-7xl mx-auto border-t-2 border-gray-200 dark:border-gray-500"></div>
</div>