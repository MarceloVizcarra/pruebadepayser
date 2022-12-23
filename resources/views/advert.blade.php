@extends('template')

@section('title', 'Anuncios| Depayser')

@section('content')
<h1>Listado de empleos</h1>

@foreach ($employes as $employe)
    <h2>{{ $employe->title }}</h2>
    <p>
        {{ $employe->content }}
    </p>
    <br>
    <span> {{ $employe->user->name }}</span>
    <a href="{{ route('employe', $employe->slug) }}">Ver</a>
@endforeach

{{ $employes->links() }}

@endsection