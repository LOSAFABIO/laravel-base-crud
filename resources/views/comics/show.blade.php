@extends('layouts.base')

@section('title','comic')

@section('content')
  <h1>{{$comic->title}}</h1>
  <img src="{{$comic->thumb}}" alt="">
  <p>{!!$comic->description!!}</p>
  <a href="{{route("comic.index")}}">
    <button type="button" class="btn btn-primary">Torna indietro</button>
  </a>
  <form action="{{route("comic.destroy", $comic->id)}}" method="POST">
    @csrf
    @method("DELETE")
    <button type="submit" class="btn btn-danger">Cancella</button>
  </form>
@endsection