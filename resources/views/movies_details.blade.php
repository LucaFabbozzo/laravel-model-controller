@extends('layout.main')


@section('content')

<div class="card m-auto p-5 mt-5" style="width:60%;">
  <div class="card-body p-5 bg-light">
    <a href="{{Route('movies')}}"><h3 class="card-title text-uppercase fs-1">{{$movie->title}}</h3></a>
    <h5 class="card-title fs-2">Original Title: {{$movie->original_title}}</h5>
    <p class="card-text fs-4">Nationality: {{$movie->nationality}}</p>
    <p class="card-text fs-5">Date: {{$movie->date}}</p>
    <p class="card-text fs-5">Rating: {{$movie->vote}}</p>
  </div>
</div>

@endsection



@section('title')
    Details
@endsection
