@extends('layouts.layout')

@section('metaTitle', 'BackComics')

@section('mainContent')

<div class="container d-flex flex-column justify-content-center align-items-center">
    <a href="{{ route('comics.index') }}"><h1 class="welcome-title">Comics</h1></a>
    <h3 class="welcome-subtitle">BackOffice</h3>
</div>

@endsection