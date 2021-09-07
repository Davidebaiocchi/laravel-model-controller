@extends('layouts.app')
@section('title', 'Comics')

<!-- qui inserirò i conenuti della pagina esclusi le parti fisse per tutto il sito -->
@section('content')

    <div class="jumbotron">

    </div>

    <span class="x">
        current series
    </span>

    <div class="albums">
        <div class="rows">
            @foreach($comics as $comic)
        <div class="card">
            <img src=" {{ $comic['thumb'] ?? '' }}" alt="{{ $comic['series'] ?? ''}} ">
            <p> {{ $comic['series'] ?? '' }} </p>
        </div>
        @endforeach
        </div>
        

        <span class="y">
            load more
        </span>
    </div>

    <div class="row-blue">
        
    </div>
@endsection