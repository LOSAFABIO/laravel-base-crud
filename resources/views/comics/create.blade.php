@extends('layouts.base')

@section('title','lista prodotti')

@section('content')
    <h1>Crea un fumetto:</h1>
    <form action="{{route("comics.store")}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" aria-describedby="title" name="title" placeholder="Inserisci titolo" value="{{old("title")}}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{old("description")}}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="thumb">Copertina</label>
            <input type="text" class="form-control-file" id="thumb" name="thumb">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" class="form-control" id="price" aria-describedby="price" name="price" placeholder="Inserisci prezzo" value="{{old("price")}}">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" aria-describedby="series" name="series" placeholder="Inserisci serie" value="{{old("series")}}">
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="sale_date">Data uscita</label>
            <input type="date" class="form-control" id="sale_date" aria-describedby="sale_date" name="sale_date" placeholder="Inserisci data uscita" value="{{old("sale_date")}}">
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type">Tipologia</label>
            {{-- <input type="text" class="form-control" id="type" aria-describedby="type" name="type" placeholder="Inserisci tipologia" value="{{old("type")}}"> --}}
            <select class="form-control form-control-md" id="type" name="type">
                <option value="graphic novel" {{(old("type") == "graphic novel")? "selected": ""}}>Graphic novel</option>
                <option value="comic book" {{(old("type") == "comic book")? "selected": ""}}>Comic book</option>
            </select>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <a href="{{route("comics.index")}}">
            <button type="button" class="btn btn-primary">Torna indietro</button>
        </a>
        <a href="{{route("comics.index")}}">
            <button type="submit" class="btn btn-success">Salva</button>
        </a>
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