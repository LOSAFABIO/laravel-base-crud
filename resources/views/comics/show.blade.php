@extends('layouts.base')

@section('title','comic')

@section('content')
  <h1>{{$product->name}}</h1>
  <p>{!!$product->description!!}</p>
  <a href="{{route("products.index")}}"><button type="button" class="btn btn-primary">back</button></a>
@endsection