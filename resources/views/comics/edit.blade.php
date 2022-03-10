@extends('layouts.base')

@section('title','lista prodotti')

@section('content')
    <h1>Modifica prodotto: {{$element->title}}</h1>
    <form action="{{route("comic.update", $element->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci titolo" value="{{$element->title}}">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" placeholder="Inserisci descrizione">{{$element->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Copertina</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci immagine" value="{{$element->thumb}}">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci price" value="{{$element->price}}">
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie" value="{{$element->series}}">
        </div>
        <div class="form-group">
            <label for="sale_date">Data uscita</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci data uscita" value="{{$element->sale_date}}">
        </div>
        <div class="form-group">
            <label for="type">Tipologia</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci tipologia" value="{{$element->type}}">
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection