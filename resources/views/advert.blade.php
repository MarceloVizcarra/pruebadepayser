@php
    $class = 'uppercase text-gray-900 font-medium rounded-full px-2 py-1.5';
    $Otros = $class . ' bg-orange-200';
    $Backend = $class . ' bg-blue-200';
    $Fullstack = $class . ' bg-red-200';
    $Frontend = $class . ' bg-green-200';
@endphp

<x-app-layout>
    <!--  -->
    <form action="{{ route('advert') }}" method="GET" class="flex items-center justify-between mx-6 my-6">
        <input type="text" name="search" placeholder="Buscar" class="flex-grow border border-gray-300 rounded-full px-4 py-2">
        <select name="filter" id="filter" class="mx-4 border border-gray-300 rounded">
            <option value="" selected>Categoria</option>
            <option value="Backend">Backend</option>
            <option value="Frontend">Frontend</option>
            <option value="Fullstack">Fullstack</option>
            <option value="Otros">Otros</option>
        </select>
        <input type="submit" value="Buscar" class="cursor-pointer bg-gray-800 text-white rounded px-4 py-2">
    </form>

    <div class="grid grid-cols-1 gap-2 mb-4">
        @foreach ($employes as $employe)
            <a href="{{ route('employe', $employe->slug) }}" class="group bg-gray-100 hover:bg-gray-200 rounded-lg px-6 py-4 flex " >
                <img src="{{ $employe->image }}" alt="logo" class="h-12 gap-4 mr-4 mt-4">
                <div class="w-full grid grid-cols-1 gap-1">
                    <h2 class="uppercase font-bold mt-2 text-base group-hover:underline">{{ $employe->title }}</h2>
                    <span class=" font-semibold"> {{ $employe->company }}</span>
                    <span class=" font-semibold text-gray-600 text-sm"> {{ $employe->location . ', ' . $employe->city . ', ' . $employe->country }}</span>
                    <span class=" text-gray-600 text-sm"> Publicado: {{ $employe -> updated_at->format('d/m/Y') }}</span>
                    <span class=" text-gray-600 text-sm"> Finaliza: {{ $employe->deadline }}</span>
                    <p class="text-xs flex items-center justify-between">
                        <span class="text-sm text-gray-600">{{ $employe->type }}</span>
                        <span class="{{ ${$employe->category} }}">{{ $employe->category }}</span>
                    </p>
                </div>
            </a>
        @endforeach
    </div>

    {{ $employes->links() }}
</x-app-layout>