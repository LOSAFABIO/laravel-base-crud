@extends('layouts.base')

@section('title','comic')

@section('content')
  <h1>{{$comic->title}}</h1>
  <img src="{{$comic->thumb}}" alt="">
  <p>{!!$comic->description!!}</p>
  <p>{{$comic->series}}</p>

  <a href="{{route("comic.index")}}">
    <button type="button" class="btn btn-primary">Vai alla Home</button>
  </a>
  <form action="{{route("comic.destroy", $comic->id)}}" method="POST">
    @csrf
    @method("DELETE")
    <button onclick="return confirm('Sicuro di voler cancellare questo fumetto?');" type="submit" class="btn btn-danger">Cancella</button>
  </form>
@endsection