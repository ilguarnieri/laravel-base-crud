@extends('layouts.layout')

@section('metaTitle', 'BackComics')

@section('mainContent')

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Series</th>
        <th scope="col">Type</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        
        <tr>
          <th scope="row">{{ $comic->id }}</th>
          <td>{{ $comic->title }}</td>
          <td>{{ $comic->series }}</td>
          <td>{{ $comic->type }}</td>
          <td>{{ $comic->price }}</td>
          <td>
            <a href="{{ route('comics.show', $comic->id) }}">
              <button type="button" class="btn btn-outline-success btn-sm">Visualizza</button>
            </a>
          </td>
          <td>
            <a href="{{ route('comics.edit', $comic->id) }}">
              <button type="button" class="btn btn-outline-primary btn-sm">Modifica</button>
            </a>
          </td>
          <td>
            <form action="{{ route('comics.destroy', $comic) }}" method="POST">
              @csrf
              @method('DELETE')

              <button type="submit" class="btn btn-outline-secondary btn-sm">
                Elimina
              </button>
            </form>
          </td>
        </tr>            
        @endforeach
    </tbody>
  </table>
    
@endsection