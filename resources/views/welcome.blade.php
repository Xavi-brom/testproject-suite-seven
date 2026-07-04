<x-layout forceDark>
    <x-slot name="title">Welcome</x-slot>
    <x-slot name="header">
        <x-header class="bg-transparent backdrop-blur-m" />
    </x-slot>
    <div class="fixed inset-0 -z-10">
        <img src="{{ asset('images/background-image-home.png') }}" alt="Welcome Image" class="w-full h-full object-cover">
        <div class="absolute inset-0 shadow-[inset_0_0_80px_30px_rgba(0,0,0,0.6)] pointer-events-none"></div>
    </div>
</x-layout>