@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
    <h1>
        Laravel Start 1
    </h1>

    <h2>
        <button class="btn btn-primary ">
            <a class="text-white text-decoration-none " href="{{ route('comics.index') }}">Vai ai comics</a>
        </button>
    </h2>
    <h2>
        <button class="btn btn-primary ">
            <a class="text-white text-decoration-none " href="{{ route('comics.create') }}">Aggiungi un comic</a>
        </button>
    </h2>
@endsection
