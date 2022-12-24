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
    @auth
    <form action="{{ route('employes.store') }}" method="POST">
        @csrf
        <input type="text" name="user_id" id="user_id" class="border border-gray-400 p-2 w-full rounded mb-4" value="{{ old('id', Auth::user()->id ) }}">
        <input type="text" name="employe_id" id="employe_id" class="border border-gray-400 p-2 w-full rounded mb-4" value="{{ old('id', $employe->id) }}">
        <div class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between " >
            <a href="{{ route('advert') }}" class="text-indigo-600">Volver</a>
            <input type="submit" value="Aplicar" class="bg-gray-800 text-white rounded px-4 py-2">
        </div>
    </form>
    @endauth
</x-app-layout>

    