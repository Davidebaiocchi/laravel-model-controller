@extends('layouts.app')
@section('title', 'Home')


<!-- qui inserirò i conenuti della pagina esclusi le parti fisse per tutto il sito -->
@section('content')
    <h1>il titolo del giorno</h1>
    <div class="container">
        @foreach($comics as $key => $comic)

            {{ $comic->title }}
        @endforeach
    </div>
@endsection