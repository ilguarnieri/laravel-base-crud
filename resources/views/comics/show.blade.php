@extends('layouts.layout')

@section('metaTitle', 'BackComics - Show')

@section('mainContent')

<div class="container">
    <h1 class="text-center">{{ $comic->title }}</h1>
    <h5 class="text-center">{{ $comic->series }}</h5>

    <div class="comic-info d-flex justify-content-between p-3 pt-5">

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

        <div class="col-9">
            <p>{{ $comic->description }}</p>
            <h3 class="pt-4"><strong>${{ $comic->price }}</strong></h3>
            <h6><strong>{{ $comic->sale_date }}</strong></h6>

            <div class="d-flex">
                <a class="mr-2" href="{{ route('comics.edit', $comic->id) }}">
                    <button type="button" class="btn btn-outline-primary btn-sm">Modifica</button>
                </a>
                <form class="delete-form" action="{{ route('comics.destroy', $comic) }}" method="POST">
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-outline-secondary btn-sm">
                      Elimina
                    </button>
                  </form>
            </div>

            <a href="{{ URL::route('comics.index') }}">
                <h5 class="mt-4 mb-4"><- Torna alla lista</h5>
            </a>
        </div>
    </div>
</div>

@endsection