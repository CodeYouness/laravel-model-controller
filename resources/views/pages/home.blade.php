@extends('layouts.app')

@section('page-title')
    HomePage
@endsection

@section('main-content')
    <h1>
        homepage
    </h1>
    @dump($movies)
@endsection
