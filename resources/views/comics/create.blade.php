@extends('layouts.layout')

@section('metaTitle', 'BackComics - Create')

@section('mainContent')

<div class="container pt-5">

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci il titolo">
        </div>

        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" name="series" id="series" placeholder="Inserisci il nome della serie">
        </div>

        <div class="form-group">
            <label for="type">Genere</label>
            <select class="form-control" name="type" id="type">
                <option value="" selected>- - Seleziona - -</option>
                <option value="comic_book">Comic Book</option>
                <option value="graphic_novel">Graphic Novel</option>
            </select>
        </div>

        <div class="form-group">
            <label for="thumb">Link immagine</label>
            <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Inserisci il link della thumb">
        </div>

        <div class="form-group">
            <label for="sale_date">Data di vendita</label>
            <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="Inserisci la data di vendita">
        </div>

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Inserisci il costo">
        </div>

        <div class="form-group">
            <label for="description">Descrizione:</label>
            <textarea class="form-control" name="description" id="description" rows="6"></textarea>
        </div>

        <button type="submit" class="btn btn-secondary btn-lg">Crea Comic</button>
    </form>    
</div>
    
@endsection