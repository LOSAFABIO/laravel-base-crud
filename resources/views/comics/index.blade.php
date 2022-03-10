@extends('layouts.base')

@section('title','lista comics')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col">description</th>
        <th scope="col">thumb</th>
        <th scope="col">price</th>
        <th scope="col">series</th>
        <th scope="col">description</th>
        <th scope="col">sale_date</th>
        <th scope="col">type</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $elemento)
        <tr>
            <th scope="row">{{$elemento->id}}</th>
            <td>{{$elemento->title}}</th>
            <td>{{$elemento->description}}</th>
            <td>{{$elemento->thumb}}</th>
            <td>{{$elemento->price}}</th>
            <td>{{$elemento->series}}</th>
            <td>{!!$elemento->sale_date!!}</th>
            <td>{{$elemento->type}}</th>
              <a href="{{route("comic.show", $elemento->id)}}">
            <button type="button" class="btn btn-primary">vedi</button>
        </tr>
        @endforeach
      
    </tbody>
  </table>
@endsection