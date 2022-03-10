@extends('layouts.base')

@section('title','comic')

@section('content')
  <h1>{{$comic->name}}</h1>
  <p>{!!$comic->description!!}</p>
  <a href="{{route("comic.index")}}">
    <button type="button" class="btn btn-primary">back</button>
  </a>
@endsection