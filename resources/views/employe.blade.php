<x-app-layout>

    <div class="py-16">
        <h1 class="text-5xl mb-8">{{ $employe->title }}</h1>
        <p class="leading-loose text-lg text-gray-700">
            {{ $employe->content }}
        </p>
        <div class="flex items-center gap-4 mt-8">
            <p class="text-gray-700 text-sm">
                <span class="font-bold">Empresa:</span> {{ $employe->company }}
            </p>
            <p class="text-gray-700 text-sm">
                <span class="font-bold">Ubicación:</span> {{ $employe->location }}
            </p>
            <p class="text-gray-700 text-sm">
                <span class="font-bold">Tipo:</span> {{ $employe->type }}
            </p>
            <p class="text-gray-700 text-sm">
                <span class="font-bold">Salario:</span> {{ $employe->salary }}
            </p>
            <p class="text-gray-700 text-sm">
                <span class="font-bold">Categoria:</span> {{ $employe->category }}
            </p>
            <p class="text-gray-700 text-sm">
                <span class="font-bold">Fecha de publicación:</span> {{ $employe->created_at->format('d/m/Y') }}
            </p>
            <p class="text-gray-700 text-sm">
                <span class="font-bold">Fecha de cierre:</span> {{ $employe->deadline }}
            </p>
        </div>
    </div>
    <div class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-center ">
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

    