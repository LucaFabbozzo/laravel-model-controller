@extends('layout.main')


@section('content')

<div class="container">
    <h1>Movies</h1>
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-4">
            <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">"{{$movie->title}}"</h5>
            <h5 class="card-title">"{{$movie->original_title}}"</h5>
            <p class="card-text"></p>
        </div>
        @endforeach
    </div>
</div>

@endsection

@section('title')
    Movies
@endsection
