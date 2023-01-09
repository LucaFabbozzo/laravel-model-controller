@extends('layout.main')


@section('content')

<div class="card m-auto mt-5 text-center" style="width:60%;">
  <div class="card-body">
    <h3 class="card-title">{{$movie->title}}</h3>
    <h5 class="card-title">Original Title: {{$movie->original_title}}</h5>
    <p class="card-text">Nationality: {{$movie->nationality}}</p>
    <p class="card-text">Date: {{$movie->date}}</p>
    <p class="card-text">Rating: {{$movie->vote}}</p>
  </div>
</div>

@endsection



@section('title')
    Details
@endsection
