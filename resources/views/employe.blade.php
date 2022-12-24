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
    <div class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between ">
        <a href="{{ route('advert') }}" class="text-indigo-600">Volver</a>
        @auth
        @if (in_array($employe->id, $apply->pluck('employe_id')->toArray()))
            <p class="text-red-500">Ya has aplicado a este empleo</p>
        @else
            <form action="{{ route('applies.store') }}" method="POST">
            @csrf
            <input type="text" name="user_id" id="user_id" class="hidden" value="{{ old('id', Auth::user()->id ) }}">
            <input type="text" name="employe_id" id="employe_id" class="hidden" value="{{ old('id', $employe->id) }}">
            <input type="submit" value="Aplicar" class="bg-gray-800 text-white rounded px-4 py-2">
        
        </form>
        @endif
        @endauth
    </div>
</x-app-layout>

    