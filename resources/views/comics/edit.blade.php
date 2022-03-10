@extends('layouts.base')

@section('title','lista prodotti')

@section('content')
    <h1>Modifica un fumetto:</h1>
    <form action="{{route("comic.update", $comic->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci titolo" value="{{$comic->title}}">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" placeholder="Inserisci descrizione">{{$comic->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Copertina</label>
            <input type="text" class="form-control-file" id="thumb" name="thumb" placeholder="Inserisci immagine" value="{{$comic->thumb}}">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci price" value="{{$comic->price}}">
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie" value="{{$comic->series}}">
        </div>
        <div class="form-group">
            <label for="sale_date">Data uscita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci data uscita" value="{{$comic->sale_date}}">
        </div>
        <div class="form-group">
            <label for="type">Tipologia</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci tipologia" value="{{$comic->type}}">
        </div>
        <button type="submit" class="btn btn-success">Salva</button>
    </form>
@endsection