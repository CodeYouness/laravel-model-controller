@extends('layouts.app')

@section('page-title')
    HomePage
@endsection

@section('main-content')
<h1>
    MovieList
</h1>
<main id="main-app">

        @foreach ($movies as $movie)
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$movie->title}}</h4>
                    <p class="card-subtitle text-body-secondary">
                        Date: {{$movie->date}}
                    </p>
                    <p class="card-text">
                        Average vote: {{$movie->vote}}
                    </p>
                </div>
            </div>
        @endforeach

</main>
@endsection
