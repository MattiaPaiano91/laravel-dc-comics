@extends('layouts.app')

@section('page-title', $comic->title, 'edit')

@section('main-content')

<h1 class="ms-3">
    Comic Edit
</h1>

<div class="row">
    <div class="col py-4 mx-3">
        <div class="mb-4">
            <a href="{{ route('comics.index') }}" class="btn btn-primary">
                Torna all'index dei comics
            </a>
        </div>
        
        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input value="{{ $comic->title}}" type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" maxlength="64">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo<span class="text-danger">*</span></label>
                <input value="{{ $comic->type}}" type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo..." maxlength="16" required>
            </div>
            
            <div class="mb-3">
                <label for="series" class="form-label">Serie<span class="text-danger">*</span></label>
                <input value="{{ $comic->series}}" type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" value="{{ $comic->description}}" class="form-control" id="description" name="description" rows="3" placeholder="Inserisci la descrizione..."></input>
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artisti</label>
                <input type="text" value="{{  implode(', ',json_decode($comic->artists)) }}" class="form-control" id="artists" name="artists" placeholder="Inserisci gli Artisti"></input>
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <input type="text" value="{{ implode(', ',json_decode($comic->writers)) }}" class="form-control" id="writers" name="writers" placeholder="Inserisci gli Scrittori"></input>
            </div>

            
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input value="{{ $comic->price}}" type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo">
            </div>


            <div>
                <button type="submit" class="btn btn-success w-100">
                    + Aggiungi
                </button>
            </div>

        </form>
    </div>
</div>
            
@endsection
