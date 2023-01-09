@extends('layout.main')


@section('content')
<div class="card text-center" style="width:100%;">
  <div class="card-body">
    <h1>Errore 404</h1>
    <h3 class="card-title">{{$exception->getMessage()}}</h3>
  </div>
</div>

@endsection
