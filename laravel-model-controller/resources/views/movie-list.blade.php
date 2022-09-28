@extends('layout.app')

@section('title', 'Elenco dei film')

@section('content')
    <h1>Lista dei film:</h1>

    <ul>
        @foreach ($movies as $movie)
            <li>
                {{$book->id}} - {{$book->title}} - {{$book->original_title}} - {{$book->nationality}} - {{$book->date}} - {{$book->vote}}
            </li>
        @endforeach
    </ul>

    

@endsection


