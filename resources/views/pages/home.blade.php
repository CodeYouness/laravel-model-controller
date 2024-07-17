@extends('layouts.app')

@section('page-title')
    HomePage
@endsection

@section('main-content')
    <h1>
        MovieList
    </h1>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <h3>{{$movie->title}}</h3>
                <p>
                    Date: {{$movie->date}}
                </p>
                <p>
                    Average vote: {{$movie->vote}}
                </p>
            </li>
        @endforeach
    </ul>
@endsection
