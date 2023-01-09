@extends('layout.main')


@section('content')

<div class="container">
    <h1 class="text-center text-uppercase">Movies</h1>
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-6">
          <div class="card p-5 mt-5" style="width: 38rem;">
            <div class="card-body">
             <h2 class="card-title">{{$movie->title}}</h2>
             <h4>Original Title: {{$movie->original_title}}</h4>
             <h5>Nationality: {{$movie->nationality}}</h5>
             <p>Date: {{$movie->date}}</p>
             <p>Rating: {{$movie->vote}}</p>
            </div>
          </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

@section('title')
    Movies
@endsection
