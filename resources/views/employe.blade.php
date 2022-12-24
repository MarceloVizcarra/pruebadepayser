<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>


    <div class="py-16">
        <h1 class="text-5xl mb-8">{{ $employe->title }}</h1>
        <p class="leading-loose text-lg text-gray-700">
            {{ $employe->content }}
        </p>
    </div>
</x-app-layout>

    