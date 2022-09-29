@extends('layout.app')

@section('title', 'Elenco dei film')

@section('content')
    <h1>Lista dei film:</h1>

    <ul>
        @foreach ($movies as $movie)
            <li>
                {{$movie->id}} - {{$movie->title}} - {{$movie->original_title}} - {{$movie->nationality}} - {{$movie->date}} - {{$movie->vote}}
            </li>
        @endforeach
    </ul>

    

@endsection


