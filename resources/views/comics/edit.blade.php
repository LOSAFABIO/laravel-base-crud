@extends('layouts.base')

@section('title','lista prodotti')

@section('content')
    <h1>Modifica un fumetto:</h1>
    <form action="{{route("comics.update", $comic->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci titolo" value="{{old("title")??$comic->title}}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" placeholder="Inserisci descrizione">{{$comic->description}}</textarea>
            @error('description')   
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="thumb">Copertina</label>
            <input type="text" class="form-control-file" id="thumb" name="thumb" placeholder="Inserisci copertina" value="{{$comic->thumb}}">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci price" value="{{$comic->price}}">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie" value="{{old("series")??$comic->series}}">
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="sale_date">Data uscita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci data uscita" value="{{$comic->sale_date}}">
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type">Tipologia</label>
            {{-- <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci tipologia" value="{{old("type")??$comic->type}}"> --}}
            <select class="form-control form-control-md" id="type" name="type">
                <option value="graphic novel" {{((old("type")??$comic->type) == "graphic novel")? "selected": ""}}>Graphic novel</option>
                <option value="comic book" {{((old("type")??$comic->type) == "comic book")? "selected": ""}}>Comic book</option>
            </select>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Salva</button>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection 