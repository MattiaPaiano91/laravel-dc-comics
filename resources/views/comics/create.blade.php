@extends('layouts.app')

@section('page-title', 'Create')

@section('main-content')

<h1 class="ms-3">
    Comics Create
</h1>
@if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
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
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Inserisci il titolo" maxlength="64" value="{{ old('title') }}" >
                @error ('title')
                    <div class="alert alert-danger">
                                {{ $message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo<span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" placeholder="Inserisci il tipo..." maxlength="16" value="{{ old('type') }}" required>
                @error ('title')
                    <div class="alert alert-danger">
                                {{ $message}}
                    </div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="series" class="form-label">Serie<span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Inserisci la serie" value="{{ old('series') }}" required>
                @error ('title')
                    <div class="alert alert-danger">
                                {{ $message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" placeholder="Inserisci la descrizione..." value="{{ old('description') }}" ></textarea>
                @error ('title')
                    <div class="alert alert-danger">
                                {{ $message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artisti</label>
                <textarea class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" placeholder="Inserisci gli Artisti" value="{{ old('artists') }}"></textarea>
                @error ('title')
                    <div class="alert alert-danger">
                                {{ $message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <textarea class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" placeholder="Inserisci gli Scrittori" value="{{ old('writers') }}"></textarea>
                @error ('title')
                    <div class="alert alert-danger">
                                {{ $message}}
                    </div>
                @enderror
            </div>

            
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Inserisci il prezzo">
                @error ('title')
                    <div class="alert alert-danger">
                                {{ $message}}
                    </div>
                @enderror
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
