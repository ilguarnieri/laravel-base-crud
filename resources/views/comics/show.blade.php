@extends('layouts.layout')

@section('metaTitle', 'BackComics - Show')

@section('mainContent')

<div class="container">
    <h1 class="text-center">{{ $comic->title }}</h1>
    <h5 class="text-center">{{ $comic->series }}</h5>

    <div class="comic-info d-flex justify-content-between p-3 pt-5">
        <img src="{{ $comic->thumb }}" alt="thumb">
        <div class="col-9">
            <p>{{ $comic->description }}</p>
            <h3 class="pt-4">${{ $comic->price }}</h3>
            <h6>{{ $comic->sale_date }}</h6>
        </div>

    </div>
</div>

@endsection