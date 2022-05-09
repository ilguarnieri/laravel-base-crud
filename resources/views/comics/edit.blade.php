@extends('layouts.layout')

@section('metaTitle', 'BackComics - Edit')

@section('mainContent')

<div class="container pt-5 d-flex">

    <figure class="d-none d-sm-block mr-3 col-3">            
        <img class="mw-100"
        src="
        @if($comic->thumb)
        {{ $comic->thumb }}
        @else
        {{ asset('img/unknown.jpg') }}
        @endif"
        alt="thumb">
    </figure>   

    <div class="flex-grow-1">
        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
    
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" name="title" id="title"
                @error('title')
                value="{{ $comic->title }}"
                @enderror
                value="{{ old('title') ?: $comic->title }}" placeholder="Inserisci il titolo">

                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
    
            <div class="form-group">
                <label for="series">Serie</label>
                <input type="text" class="form-control" name="series" id="series"
                @error('series')
                value="{{ $comic->series }}"
                @enderror
                value="{{ old('series') ?: $comic->series }}" placeholder="Inserisci il nome della serie">

                @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
    
            <div class="form-group">
                <label for="type">Genere</label>
                <select class="form-control" name="type" id="type">
                    <option value="">- - Seleziona - -</option>

                    <option value="comic book"
                        @error('type')
                        {{ $comic->type == 'comic book' ? 'selected' : '' }}
                        @enderror

                        {{ old('type') ? (old('type') == 'comic book' ? 'selected' : '') : ($comic->type == 'comic book' ? 'selected' : '')}}>
                        Comic Book
                    </option>

                    <option value="graphic novel"
                        @error('type')
                        {{ $comic->type == 'graphic novel' ? 'selected' : '' }}
                        @enderror

                        {{ old('type') ? (old('type') == 'graphic novel' ? 'selected' : '') : ($comic->type == 'graphic novel' ? 'selected' : '')}}>
                        Graphic Novel
                    </option>

                </select>

                @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
    
            <div class="form-group">
                <label for="thumb">Link immagine</label>
                <input type="text" class="form-control" name="thumb" id="thumb"
                @error('thumb')
                value="{{ $comic->thumb }}"
                @enderror
                value="{{ old('thumb') ?: $comic->thumb }}" placeholder="Inserisci il link della thumb">

                @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
    
            <div class="form-group">
                <label for="sale_date">Data di vendita</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date"
                @error('sale_date')
                value="{{ $comic->sale_date }}"
                @enderror
                value="{{ old('sale_date') ?: $comic->sale_date }}" placeholder="Inserisci la data di vendita">

                @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
    
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" name="price" id="price"
                @error('price')
                value="{{ $comic->price }}"
                @enderror
                value="{{ old('price') ?: $comic->price }}" placeholder="Inserisci il costo">

                @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
    
            <div class="form-group">
                <label for="description">Descrizione:</label>
                <textarea class="form-control" name="description" id="description" rows="6">{{ $comic->description }}</textarea>
            </div>
    
            <button type="submit" class="btn btn-secondary btn-lg">Aggiorna</button>
        </form>

        <a href="{{ route('comics.show', $comic) }}">
            <h5 class="mt-4 mb-4">Esci dalla modalità modifica</h5>
        </a>
    </div>    
</div>
    
@endsection