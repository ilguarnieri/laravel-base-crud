@extends('layouts.layout')

@section('metaTitle', 'BackComics - Create')

@section('mainContent')

<div class="container pt-5">

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" name="title" id="title"
            @error('title') value="" @enderror
            value="{{ old('title') }}"
            placeholder="Inserisci il titolo">

            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" name="series" id="series"
            @error('text') value="" @enderror
            value="{{ old('text') }}"
            placeholder="Inserisci il nome della serie">

            @error('series')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="type">Genere</label>
            <select class="form-control" name="type" id="type">
                <option value="" selected>- - Seleziona - -</option>
                <option value="comic book" {{ old('type') == 'comic book' ? 'selected' : '' }}>Comic Book</option>
                <option value="graphic novel" {{ old('type') == 'graphic novel' ? 'selected' : '' }}>Graphic Novel</option>
            </select>

            @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="thumb">Link immagine</label>
            <input type="text" class="form-control" name="thumb" id="thumb"
            @error('thumb') value="" @enderror
            value="{{ old('thumb') }}"
            placeholder="Inserisci il link della thumb">
            
            @error('thumb')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="sale_date">Data di vendita</label>
            <input type="text" class="form-control" name="sale_date" id="sale_date"
            @error('sale_date') value="" @enderror
            value="{{ old('sale_date') }}"
            placeholder="Inserisci la data di vendita">
            
            @error('sale_date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="text" class="form-control" name="price" id="price"
            @error('price') value="" @enderror
            value="{{ old('price') }}"
            placeholder="Inserisci il costo">
            
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Descrizione:</label>
            <textarea class="form-control" name="description" id="description" rows="6"></textarea>
        </div>

        <button type="submit" class="btn btn-secondary btn-lg mb-5">Crea Comic</button>
    </form>    
</div>
    
@endsection