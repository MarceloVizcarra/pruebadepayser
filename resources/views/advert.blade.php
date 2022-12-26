@php
    $class = 'uppercase text-gray-700 rounded-full px-2 py-1';
    $Otros = $class . ' bg-orange-200';
    $Backend = $class . ' bg-blue-200';
    $Fullstack = $class . ' bg-red-200';
    $Frontend = $class . ' bg-green-200';
@endphp

<x-app-layout>

    <form action="{{ route('advert') }}" method="GET" class="flex items-center justify-between mx-6 my-6">
        <input type="text" name="search" placeholder="Buscar" class="flex-grow border border-gray-300 rounded-full px-4 py-2">
        <select name="filter" id="filter" class="mx-4 border border-gray-300 rounded">
            <option value="" selected>Categoria</option>
            <option value="Backend">Backend</option>
            <option value="Frontend">Frontend</option>
            <option value="Fullstack">Fullstack</option>
            <option value="Otros">Otros</option>
        </select>
        <input type="submit" value="Buscar" class="bg-gray-800 text-white rounded px-4 py-2">
    </form>
    <div class="grid grid-cols-1 gap-4 mb-4">
        @foreach ($employes as $employe)
            <div class="bg-gray-100 rounded-lg px-6 py-4">
                <p class="text-xs flex items-center gap-2 justify-between">
                    <span class="{{ ${$employe->category} }}">{{ $employe->category }}</span>
                    <span>{{ $employe -> created_at->format('d/m/Y') }}</span>
                </p>

                <h2>{{ $employe->title }}</h2>
                <p>
                    {{ $employe->content }}
                </p>
                <span> {{ $employe->user->name }}</span>
                <a href="{{ route('employe', $employe->slug) }}">Ver</a><br><br>
            </div>
        @endforeach
    </div>

    {{ $employes->links() }}
</x-app-layout>