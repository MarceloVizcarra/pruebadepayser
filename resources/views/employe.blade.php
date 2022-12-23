@extends('template')

@section('title', 'Empleo | Depayser')

@section('content')
<h1>{{ $employe->title }}</h1>
<p>
    {{ $employe->content }}
</p>

@endsection