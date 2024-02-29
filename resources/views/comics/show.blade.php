@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
    <div class="card m-3 p-3">
                    <ul class="p-0">
                        <li><h5 class="d-inline-block">Titolo:</h5> {{ $comic->title }}</li>
                        <li><h5 class="d-inline-block">Descrizione:</h5> {{ $comic->description }}</li>
                        <li class="my-3">
                            <div class="card-box">
                                <img src="{{ $comic->thumb }}" alt="Immagine non trovata">
                            </div>
                        </li>
                        <li><h5 class="d-inline-block">Prezzo:</h5> {{ $comic->price }} $</li>
                        <li><h5 class="d-inline-block">Serie:</h5> {{ $comic->series }}</li>
                        <li><h5 class="d-inline-block">Data di vendita:</h5> {{ $comic->sale_date }}</li>
                        <li><h5 class="d-inline-block">Tipo:</h5> {{ $comic->type }}</li>
                        <li>
                            <h5 class="d-inline-block">Lista dei Artisti Più importanti:</h5>
                            <ul class="p-0">
                                
                                @foreach (json_decode($comic->artists) as $index => $artist )
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
                                
                                @foreach (json_decode($comic->writers) as $index => $writer )
                                    @if ($index <= 3)
                                        <li>
                                            {{ $writer }}
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li> 
                        <li>
                            <button class="btn btn-primary">
                                <a class="text-white text-decoration-none" href="{{ route('comics.index') }}">Vai alla sezione Comics</a>
                            </button>
                        </li>
                    </ul>
                </div>
@endsection