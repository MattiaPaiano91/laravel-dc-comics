@extends('layouts.app')

@section('page-title', 'Create')

@section('main-content')

<h1 class="ms-3">
    Comics Create
</h1>

<div class="row">
    <div class="col py-4 mx-3">
        <div class="mb-4">
            <a href="{{ route('comics.index') }}" class="btn btn-primary">
                Torna all'index dei comics
            </a>
        </div>
        
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" maxlength="64">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo..." maxlength="16" required>
            </div>
            
            <div class="mb-3">
                <label for="series" class="form-label">Serie<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Inserisci la descrizione..."></textarea>
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artisti</label>
                <textarea class="form-control" id="artists" name="artists" placeholder="Inserisci gli Artisti"></textarea>
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <textarea class="form-control" id="writers" name="writers" placeholder="Inserisci gli Scrittori"></textarea>
            </div>

            
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo">
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
