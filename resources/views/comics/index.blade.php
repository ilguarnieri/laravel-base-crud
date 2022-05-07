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
            <a href="#" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Visualizza</a>
          </td>
        </tr>            
        @endforeach
    </tbody>
  </table>
    
@endsection