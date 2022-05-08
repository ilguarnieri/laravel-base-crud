@extends('layouts.layout')

@section('metaTitle', 'BackComics - Edit')

@section('mainContent')

<div class="container pt-5 d-flex">

    <figure class="d-none d-sm-block mr-3 col-3">            
        <img class="mw-100"src="{{ $comic->thumb }}" alt="thumb">
    </figure>   

    <div class="flex-grow-1">
        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
    
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $comic->title }}" placeholder="Inserisci il titolo">
            </div>
    
            <div class="form-group">
                <label for="series">Serie</label>
                <input type="text" class="form-control" name="series" id="series" value="{{ $comic->series }}" placeholder="Inserisci il nome della serie">
            </div>
    
            <div class="form-group">
                <label for="type">Genere</label>
                <select class="form-control" name="type" id="type">
                    <option value="">- - Seleziona - -</option>
                    <option value="comic book" {{ $comic->type == 'comic book' ? 'selected' : '' }}>Comic Book</option>
                    <option value="graphic novel" {{ $comic->type == 'graphic novel' ? 'selected' : '' }}>Graphic Novel</option>
                </select>
            </div>
    
            <div class="form-group">
                <label for="thumb">Link immagine</label>
                <input type="text" class="form-control" name="thumb" id="thumb" value="{{ $comic->thumb }}" placeholder="Inserisci il link della thumb">
            </div>
    
            <div class="form-group">
                <label for="sale_date">Data di vendita</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}" placeholder="Inserisci la data di vendita">
            </div>
    
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" name="price" id="price" value="{{ $comic->price }}" placeholder="Inserisci il costo">
            </div>
    
            <div class="form-group">
                <label for="description">Descrizione:</label>
                <textarea class="form-control" name="description" id="description" rows="6">{{ $comic->description }}</textarea>
            </div>
    
            <button type="submit" class="btn btn-secondary btn-lg">Aggiorna</button>
        </form>

        <a href="{{ route('comics.show', $comic) }}">
            <h5 class="mt-4">Esci dalla modalità modifica</h5>
        </a>
    </div>    
</div>
    
@endsection