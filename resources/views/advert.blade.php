<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Publicaciones') }}
        </h2>
    </x-slot>

    <h1>Listado de empleos</h1>

    @foreach ($employes as $employe)
        <h2>{{ $employe->title }}</h2>
        <p>
            {{ $employe->content }}
        </p>
        <span> {{ $employe->user->name }}</span>
        <a href="{{ route('employe', $employe->slug) }}">Ver</a><br><br>
    @endforeach

    {{ $employes->links() }}
</x-app-layout>