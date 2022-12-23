@extends('template')

@section('title', 'Empleos| Depayser')

@section('content')
<h1>Listado de empleos</h1>

@foreach ($employes as $employe)
    <h2>{{ $employe->title }}</h2>
    <p>
        {{ $employe->content }}
    </p>
    <a href="{{ route('employe', $employe->slug) }}">Ver</a>
@endforeach
@endsection