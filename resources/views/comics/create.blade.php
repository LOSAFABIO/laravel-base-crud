@extends('layouts.base')

@section('title','lista prodotti')

@section('content')
    <h1>Crea un fumetto:</h1>
    <form action="{{route("comic.store")}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" aria-describedby="title" name="title" placeholder="Inserisci titolo">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Immagine</label>
            <input type="file" class="form-control-file" id="thumb" name="thumb">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" class="form-control" id="price" aria-describedby="price" name="price" placeholder="Inserisci prezzo">
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" aria-describedby="series" name="series" placeholder="Inserisci serie">
        </div>
        <div class="form-group">
            <label for="sale_date">Data uscita</label>
            <input type="date" class="form-control" id="sale_date" aria-describedby="sale_date" name="sale_date" placeholder="Inserisci data uscita">
        </div>
        <div class="form-group">
            <label for="sale_date">Tipologia</label>
            <input type="text" class="form-control" id="sale_date" aria-describedby="type" name="type" placeholder="Inserisci tipologia">
        </div>
        <a href="{{route("comic.index")}}">
            <button type="button" class="btn btn-primary">Torna indietro</button>
        </a>
        <a href="{{route("comic.index")}}">
            <button type="submit" class="btn btn-success">Salva</button>
        </a>
        
        
    </form>
@endsection