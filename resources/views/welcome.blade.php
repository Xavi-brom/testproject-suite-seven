<x-layout>
    <x-slot name="title">Welcome</x-slot>

    <div class="relative w-screen h-screen">

        {{-- Background Image --}}
        <img
            src="{{ asset('images/background-image-home.png') }}"
            alt="Welcome Image"
            class="w-full h-full object-cover"
        >

        {{-- Shadow above --}}
        <div class="absolute inset-x-0 top-0 h-40 bg-gradient-to-b from-black/80 to-transparent"></div>

        {{-- Shadow below --}}
        <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-black/80 to-transparent"></div>

        {{-- Hero Content --}}
        <div class="absolute inset-0 flex items-end">
            <div class="max-w-7xl w-full mx-auto pb-28">

                {{-- Title --}}
                <h1 class="text-white text-7xl leading-none font-['Mrs_Eaves_XL_Serif_Nar_OT']">
                    Design in <span class="italic">details</span>
                </h1>

                {{-- Buttons --}}
                <div class="flex gap-4 mt-8">

                    <x-button
                        background="bg-white"
                        textColor="text-gray-900"
                        triangleColor="border-[#d4b000]"
                    >
                        Ons assortiment
                    </x-button>

                    <x-button
                        background="bg-[#45454F]/70 backdrop-blur-md"
                        textColor="text-white"
                        triangleColor="border-[#d4b000]"
                        border="border border-gray-500"
                    >
                        Vind je dealer
                    </x-button>

                </div>

            </div>
        </div>

    </div>
</x-layout>