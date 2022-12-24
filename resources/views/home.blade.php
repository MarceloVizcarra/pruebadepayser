<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <div class="bg-gray-900 px-20 py-16 rounded-lg mb-8 relative overflow-hidden">
        <span class="text-xs uppercase text-gray-700 bg-gray-400 rounded-full px-2 py-1">Nunca mas sufriras para encontrar una practica</span>
        <h1 class="text-3xl text-white ml-4">Empleos destacados</h1>
        <p class="text-sm text-gray-400 ml-2">Proyecto realizado por</p>
        <img src="{{ asset('images/monkey.png') }}" alt="logo" class="absolute -right-20 -top-20 opacity-20">
    </div>

    <div class="px-4">
        <h1 class="text-2xl mb-8 text-gray-900"> Contenido de practicas </h1>

        <div class="grid grid-cols-1 gap-4 mb-4">
            @foreach($employes as $employe)
            <a href="{{ route('employe', $employe->slug) }}" class="bg-gray-100 rounded-lg px-6 py-4">
                <p class="text-xs flex items-center gap-2">
                    <span class="uppercase text-gray-700 bg-gray-200 rounded-full px-2 py-1">Titulo</span>
                    <span>{{ $employe -> created_at->format('d/m/Y') }}</span>
                </p>
                <h2>
                    {{ $employe -> title }}
                </h2>
            </a>
            @endforeach
        </div>
    </div>
</x-app-layout>
