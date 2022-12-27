<!-- Definimos variables de estilos -->
@php
    $class = 'uppercase text-gray-900 font-medium rounded-full px-2 py-1.5';
    $Otros = $class . ' bg-orange-200';
    $Backend = $class . ' bg-blue-200';
    $Fullstack = $class . ' bg-red-200';
    $Frontend = $class . ' bg-green-200';
@endphp

<!-- Contenido del cuerpo -->
<x-app-layout>

    <div class="bg-gray-800 px-20 py-16 rounded-lg mb-8 relative overflow-hidden">
        <span class="uppercase text-base text-stone-900 font-bold bg-gray-400 rounded-full px-4 py-1.5">Ultimas publicaciones</span>
        <h1 class="text-4xl text-white my-6 font-bold">Tus practicas en un solo lugar</h1>
        <img src="{{ asset('images/monkey.png') }}" alt="logo" class="absolute -right-20 -top-20 opacity-20">
    </div>

    <div class="grid grid-cols-1 gap-4 mb-4">
        @foreach($employes as $employe)
        <a href="{{ route('employe', $employe->slug) }}" class="bg-gray-100 hover:bg-gray-200 rounded-lg px-6 py-4 flex items-center">
            <img src="{{ $employe->image }}" alt="logo" class="h-16 gap-4 mr-4">
            <div>
                <p class="text-xs flex items-center gap-2 justify-between">
                    <span class="{{ ${$employe->category} }}">{{ $employe->category }}</span>
                    <span class=" text-xs">publicado: {{ $employe -> created_at->format('d/m/Y') }} finaliza: {{ $employe->deadline }}</span>
                </p>
                <h2 class="uppercase font-bold my-2 text-lg">
                    {{ $employe -> title }}
                </h2>
                <p>
                    {{ $employe -> content }}
                </p>
                <p class="text-xs flex items-center gap-6 mt-4 justify-between">
                    <span class="text-xs">{{ $employe->company }}</span>
                    <span class="text-xs">{{ $employe->location. ', '. $employe->city. ', '. $employe->country }}  </span>
                </p>
            </div>
        </a>
        @endforeach
    </div>
    
</x-app-layout>
