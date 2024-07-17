@extends('layouts.app')

@section('page-title')
    HomePage
@endsection

@section('main-content')
<main id="main-app">
    <h1>
        MovieList
    </h1>
    <ul>
        @foreach ($movies as $movie)
            <li class="card">
                <div class="card-body">
                <h4 class="card-title">{{$movie->title}}</h4>
                <p class="card-subtitle text-body-secondary">
                    Date: {{$movie->date}}
                </p>
                <p class="card-text">
                    Average vote: {{$movie->vote}}
                </p>
                </div>
            </li>
        @endforeach
    </ul>
</main>
@endsection
