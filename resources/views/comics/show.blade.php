@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
    <h1>
        {{ $comic->title }}
    </h1>
    CIAO
    <h2>
        <ul>
            <li>{{ $comic->title }}</li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </h2>
@endsection