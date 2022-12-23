@extends('template')

@section('title', 'Home | Depayser')

@section('content')
<div>

</div>

<div class="px-4">
    <h1 class="text-2xl mb-8 text-gray-900"> Contenido de practicas </h1>

    <div class="grid grid-cols-1 gap-4 mb-4">
        @foreach($employes as $employe)
        <a href="" class="bg-gray-100 rounded-lg px-6 py-4">
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
@endsection

