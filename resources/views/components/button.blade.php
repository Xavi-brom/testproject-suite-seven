@props([
    'background' => 'bg-white',
    'textColor' => 'text-gray-900',
    'triangleColor' => 'border-[#d4b000]',
    'border' => '',
])

<button
    {{ $attributes->merge([
        'class' => "group relative overflow-hidden w-52 h-14 px-5 text-base font-medium cursor-pointer transition-all duration-800 $background $border"
    ]) }}
>

    {{-- Expanding background (origin from triangle corner) --}}
    <div
        class="absolute bottom-0 right-0 w-full h-full bg-[#d4b000]
               scale-0
               origin-bottom-right
               group-hover:scale-[3]
               transition-transform duration-800 ease-out"
    ></div>

    {{-- Text --}}
    <span
        class="relative z-20 transition-colors duration-800 {{ $textColor }}
               group-hover:text-black"
    >
        {{ $slot }}
    </span>

    {{-- Triangle --}}
    <div
        class="absolute bottom-0 right-0 z-30
               w-0 h-0
               border-l-[18px] border-l-transparent
               border-b-[18px] {{ $triangleColor }}
               transition-colors duration-500
               group-hover:border-b-black"
    ></div>

</button>