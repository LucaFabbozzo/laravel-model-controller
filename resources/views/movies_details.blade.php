@extends('layout.main')


@section('content')

<div class="card text-center" style="width:100%;">
  <div class="card-body">
    <h3 class="card-title">{{$movie->title}}</h3>
    <h5 class="card-title">{{$movie->original_title}}</h5>
    <p class="card-text">{{$movie->nationality}}</p>
    <p class="card-text">{{$movie->date}}</p>
    <p class="card-text">{{$movie->vote}}</p>
  </div>
</div>

@endsection



@section('title')
    Details
@endsection
