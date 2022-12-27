<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('employes.index') }}" class="text-sm text-white bg-gray-800 rounded px-4 py-2">Empleos creados</a>
    <a href="{{ route('profile.edit') }}" class="text-sm text-white bg-gray-800 rounded px-4 py-2">Editar mi perfil</a>


    <h1>Listado de aplicaciones</h1>

    @foreach ($applies as $apply)
        <h2>{{ $apply->employe->title }}</h2>
        <p>
            {{ $apply->employe->content }}
        </p>
        <span> {{ $apply->user->name }}</span>
        <a href="{{ route('employe', $apply->employe->slug) }}">Ver</a><br><br>
    @endforeach

    {{ $applies->links() }}
</x-app-layout>
