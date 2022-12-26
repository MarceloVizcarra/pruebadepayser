@php
    $class = 'uppercase text-gray-700 rounded-full px-2 py-1';
    $Otros = $class . ' bg-orange-200';
    $Backend = $class . ' bg-blue-200';
    $Fullstack = $class . ' bg-red-200';
    $Frontend = $class . ' bg-green-200';
@endphp
<x-app-layout>
    <div class="bg-gray-800 px-20 py-16 rounded-lg mb-8 relative overflow-hidden">
        <span class="uppercase text-base text-stone-900 font-bold bg-gray-400 rounded-full px-2 py-1">Ultimas publicaciones</span>
        <h1 class="text-4xl text-white my-6 font-bold">Tus practicas en un solo lugar</h1>
        <!-- <p class="text-sm text-gray-400 ml-2">Proyecto realizado por</p> -->
        <img src="{{ asset('images/monkey.png') }}" alt="logo" class="absolute -right-20 -top-20 opacity-20">
    </div>

    <div class="">
        <h1 class="text-2xl mb-8 text-gray-900"> Contenido de practicas </h1>

        <div class="grid grid-cols-1 gap-4 mb-4">
            
            @foreach($employes as $employe)
            <a href="{{ route('employe', $employe->slug) }}" class="bg-gray-100 rounded-lg px-6 py-4">
                <p class="text-xs flex items-center gap-2 justify-between">
                    <span class="{{ ${$employe->category} }}">{{ $employe->category }}</span>
                    <span>{{ $employe -> created_at->format('d/m/Y') }}</span>
                </p>
                <h2 class="my-2 text-lg">
                    {{ $employe -> title }}
                </h2>
                <p>
                    {{ $employe -> content }}
                </p>
                <p class="text-xs flex items-center gap-2 my-2 justify-between">
                    <span class="uppercase text-xs">{{ $employe->company }}</span>
                    <span class="text-xs">{{ $employe->location }}</span>
                </p>
            </a>
            @endforeach
        </div>
    </div>
</x-app-layout>
