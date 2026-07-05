<div class="bg-[#F7F4EF] dark:bg-[#45454F]">

    <div class="grid grid-cols-[1.1fr_2fr] gap-16 px-14 py-10 max-w-7xl mx-auto">

        {{-- linkerkant --}}
        <div>
            {{-- titel --}}
            <div class="mb-6">
                <h2 class="text-xl font-medium text-gray-800 dark:text-gray-100">Deursytemen</h2>
            </div>

            {{-- deursysteemblokken --}}
            <div class="grid grid-cols-3 gap-x-6 gap-y-8">
                {{-- inbouwsystemen --}}
                <div class="flex flex-col">
                    <div class="relative w-full aspect-square bg-[#EDE8DD] dark:bg-[#54545E] rounded-sm overflow-hidden flex items-center justify-center">
                        <img src="{{ asset('images/deursystemen/inbouwsystemen.png') }}" alt="Inbouwsystemen" class="w-full h-full object-cover">
                        {{-- driehoek --}}
                        <div class="absolute bottom-0 right-0 w-0 h-0 border-l-[18px] border-l-transparent border-b-[18px] border-b-[#F7F4EF] dark:border-b-[#45454F]"></div>
                    </div>
                    <span class="mt-3 text-xs text-gray-500 dark:text-gray-400">Inbouwsystemen</span>
                </div>
                {{-- losse railsystemen --}}
                <div class="flex flex-col">
                    <div class="relative w-full aspect-square bg-[#EDE8DD] dark:bg-[#54545E] rounded-sm overflow-hidden flex items-center justify-center">
                        <img src="{{ asset('images/deursystemen/losse-railsystemen.png') }}" alt="Losse railsystemen" class="w-full h-full object-cover">
                        {{-- driehoek --}}
                        <div class="absolute bottom-0 right-0 w-0 h-0 border-l-[18px] border-l-transparent border-b-[18px] border-b-[#F7F4EF] dark:border-b-[#45454F]"></div>
                    </div>
                    <span class="mt-3 text-xs text-gray-500 dark:text-gray-400">Losse railsystemen</span>
                </div>
                {{-- schaniersystemen --}}
                <div class="flex flex-col">
                    <div class="relative w-full aspect-square bg-[#EDE8DD] dark:bg-[#54545E] rounded-sm overflow-hidden flex items-center justify-center">
                        <img src="{{ asset('images/deursystemen/schaniersystemen.png') }}" alt="Schaniersystemen" class="w-full h-full object-cover">
                        {{-- driehoek --}}
                        <div class="absolute bottom-0 right-0 w-0 h-0 border-l-[18px] border-l-transparent border-b-[18px] border-b-[#F7F4EF] dark:border-b-[#45454F]"></div>
                    </div>
                    <span class="mt-3 text-xs text-gray-500 dark:text-gray-400">Schaniersystemen</span>
                </div>
                {{-- schuifdeurpanelen --}}
                <div class="flex flex-col">
                    <div class="relative w-full aspect-square bg-[#EDE8DD] dark:bg-[#54545E] rounded-sm overflow-hidden flex items-center justify-center">
                        <img src="{{ asset('images/deursystemen/schuifdeurpanelen.png') }}" alt="Schuifdeurpanelen" class="w-full h-full object-cover">
                        {{-- driehoek --}}
                        <div class="absolute bottom-0 right-0 w-0 h-0 border-l-[18px] border-l-transparent border-b-[18px] border-b-[#F7F4EF] dark:border-b-[#45454F]"></div>
                    </div>
                    <span class="mt-3 text-xs text-gray-500 dark:text-gray-400">Schuifdeurpanelen</span>
                </div>
                {{-- accessoires --}}
                <div class="flex flex-col">
                    <div class="relative w-full aspect-square bg-[#EDE8DD] dark:bg-[#54545E] rounded-sm overflow-hidden flex items-center justify-center">
                        <img src="{{ asset('images/deursystemen/accessoires.png') }}" alt="Accessoires" class="w-full h-full object-cover">
                        {{-- driehoek --}}
                        <div class="absolute bottom-0 right-0 w-0 h-0 border-l-[18px] border-l-transparent border-b-[18px] border-b-[#F7F4EF] dark:border-b-[#45454F]"></div>
                    </div>
                    <span class="mt-3 text-xs text-gray-500 dark:text-gray-400">Accessoires</span>
                </div>
            </div>
        </div>

        {{-- rechterkant --}}
        <div class="grid grid-cols-3 gap-12">
            {{-- kies je stijl --}}
            <div>
                {{-- titel --}}
                <div class="mb-4">
                    <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-100">Kies je stijl</h3>
                </div>

                {{-- row --}}
                <div class="flex flex-col gap-3">
                    {{-- getrommeld messing --}}
                    <div>
                        <a href="#" class="text-sm text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Getrommeld messing</a>
                    </div>
                    {{-- puur zwart --}}
                    <div>
                        <a href="#" class="text-sm text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Puur zwart</a>
                    </div>
                    {{-- mat brons --}}
                    <div>
                        <a href="#" class="text-sm text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Mat brons</a>
                    </div>
                    {{-- PVD inbox --}}
                    <div>
                        <a href="#" class="text-sm text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">PVD inox</a>
                    </div>
                    {{-- PVD champagne --}}
                    <div>
                        <a href="#" class="text-sm text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">PVD champagne</a>
                    </div>
                    {{-- PVD gun metal --}}
                    <div>
                        <a href="#" class="text-sm text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">PVD gun metal</a>
                    </div>
                    {{-- meer --}}
                    <div>
                        <a href="#" class="text-sm text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Meer...</a>
                    </div>
                </div>
            </div>

            {{-- kies je product --}}
            <div>
                {{-- titel --}}
                <div class="mb-4">
                    <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-100">Kies je product</h3>
                </div>

                {{-- row --}}
                <div class="flex flex-col gap-3">
                    {{-- deurkrukken --}}
                    <div>
                        <a href="#" class="text-sm text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Deurkrukken</a>
                    </div>
                    {{-- veiligheidbeslag --}}
                    <div>
                        <a href="#" class="text-sm text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Veiligheidsbeslag</a>
                    </div>
                    {{-- voordeurbeslag --}}
                    <div>
                        <a href="#" class="text-sm text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Voordeurbeslag</a>
                    </div>
                    {{-- raambeslag --}}
                    <div>
                        <a href="#" class="text-sm text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Raambeslag</a>
                    </div>
                    {{-- accessoires --}}
                    <div>
                        <a href="#" class="text-sm text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Accessoires</a>
                    </div>
                </div>
            </div>

            {{-- overige --}}
            <div>
                {{-- titel --}}
                <div class="mb-4">
                    <h3 class="text-sm font-semibold text-gray-800 dark:text-gray-100">Overige</h3>
                </div>

                {{-- row --}}
                <div class="flex flex-col gap-3">
                    {{-- projecten --}}
                    <div>
                        <a href="#" class="text-sm text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Projecten</a>
                    </div>
                    {{-- service --}}
                    <div>
                        <a href="#" class="text-sm text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Service</a>
                    </div>
                    {{-- montage --}}
                    <div>
                        <a href="#" class="text-sm text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Montage</a>
                    </div>
                    {{-- dealers --}}
                    <div>
                        <a href="#" class="text-sm text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Dealers</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>