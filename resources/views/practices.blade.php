@extends('template')

@section('title', 'Practices | Depayser')

@section('content')
<h1>Listado</h1>

@foreach ($practices as $practice)
    <p>
        <strong>{{ $practice['id'] }}</strong>
        <a href="{{ route('practice', $practice['id']) }}">
            {{ $practice['title'] }}
        </a>
    </p>
@endforeach
@endsection