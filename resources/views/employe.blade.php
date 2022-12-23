@extends('template')

@section('title', 'Empleo | Depayser')

@section('content')
<div class="max-w-3xl mx-auto">
    <h1 class="text-5xl mb-8">{{ $employe->title }}</h1>
    <p class="leading-loose text-lg text-gray-700">
        {{ $employe->content }}
    </p>
</div>

@endsection