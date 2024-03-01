@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')
<h1 class="text-center">
    Comics
</h1>

<div class="container-fluid">
    <div class="row">
        <div class="col d-flex flex-wrap">
            
            @foreach ( $comics as $singleComic)
            
                <div class="card m-3 p-3">
                    <ul class="p-0 d-flex flex-column h-100">
                        <li><h5 class="d-inline-block">Titolo:</h5> {{ $singleComic->title }}</li>
                        <li><h5 class="d-inline-block">Descrizione:</h5> {{ $singleComic->description }}</li>
                        <li class="my-3">
                            <div class="card-box">
                                <img src="{{ $singleComic->thumb }}" alt="Immagine non trovata">
                            </div>
                        </li>
                        <li><h5 class="d-inline-block">Prezzo:</h5> {{ $singleComic->price }} $</li>
                        <li><h5 class="d-inline-block">Serie:</h5> {{ $singleComic->series }}</li>
                        <li><h5 class="d-inline-block">Data di vendita:</h5> {{ $singleComic->sale_date }}</li>
                        <li><h5 class="d-inline-block">Tipo:</h5> {{ $singleComic->type }}</li>
                        <li>
                            <h5 class="d-inline-block">Lista dei Artisti Più importanti:</h5>
                            <ul class="p-0">
                                
                                @foreach (json_decode($singleComic->artists) as $index => $artist )
                                    @if ($index <= 3)
                                        <li>
                                            {{ $artist }}
                                        </li>
                                    @endif
                                @endforeach
                                        
                            </ul>
                         </li>
                        <li>
                            <h5 class="d-inline-block">Lista dei Scrittori Più importanti:</h5> 
                            <ul class="p-0">
                                
                                @foreach (json_decode($singleComic->writers) as $index => $writer )
                                    @if ($index <= 3)
                                        <li>
                                            {{ $writer }}
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li> 
                         <li class="mt-auto align-self-center ">
                            <button class="btn btn-primary me-2">
                                <a class="text-white text-decoration-none" href="{{ route('comics.show', $singleComic) }}">Vai al comic</a>
                            </button>
                            <button class="btn btn-warning me-2">
                                <a class="text-white text-decoration-none" href="{{ route('comics.edit', $singleComic) }}">Modifica</a>
                            </button>
                            <form onsubmit="return confirm('Vuoi davvero eliminare L\'elemento?')" class="d-inline-block me-2" action="{{ route('comics.destroy', $singleComic) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    Elimina
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
                                


            @endforeach  
        </div>
    </div>
</div>


@endsection
