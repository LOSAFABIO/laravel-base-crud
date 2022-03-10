@extends('layouts.base')

@section('title','lista comics')

@section('content')
<table class="table">
  <a href="{{route("comic.create")}}"><button type="button" class="btn btn-secondary">Crea nuovo</button></a>
  <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Immagine</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Serie</th>
        <th scope="col">Data uscita</th>
        <th scope="col">Tipologia</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $elemento)
        <tr>
          <th scope="row">{{$elemento->id}}</th>
          <td>{{$elemento->title}}</th>
          <td>{!!$elemento->description!!}</th>
          <td><img src="{{$elemento->thumb}}" alt=""></th>
          <td>{{$elemento->price}}</th>
          <td>{{$elemento->series}}</th>
          <td>{{$elemento->sale_date}}</th>
          <td>{{$elemento->type}}</th>
          <td>
            <a href="{{route("comic.show", $elemento->id)}}"><button type="button" class="btn btn-primary">Info</button></a>
            <a href="{{route("comic.edit", $elemento->id)}}"><button type="button" class="btn btn-warning">Modifica</button></a>
            <form action="{{route("comic.destroy", $elemento->id)}}" method="POST">
              @csrf
              @method("DELETE")
              <button onclick="return confirm('Sicuro di voler cancellare questo fumetto?');" type="submit" class="btn btn-danger">Cancella</button>
            </form>
          </td>
        </tr>
        @endforeach
      
    </tbody>
  </table>
@endsection