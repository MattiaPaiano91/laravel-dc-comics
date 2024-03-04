<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footerLinks = config('footerLinks');
        $comics = Comic::all();
        return view('comics.index', compact('comics', 'footerLinks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $footerLinks = config('footerLinks');
        return view('comics.create', compact('footerLinks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $comicData = $request->validate([
            'title' => 'required|max:64',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'type' => 'nullable|max:64',
            'series' => 'required|max:64',
            'artists' => 'required',
            'writers' => 'required'
        ]); 

        $comic = new Comic();
        $comic -> title = $comicData['title'];
        $comic -> description = $comicData['description'];
        $comic -> price = $comicData['price'];
        $comic -> type = $comicData['type'];
        $comic -> series = $comicData['series'];

        $artist = explode(',', $comicData['artists']);
        $comic -> artists = json_encode($artist);

        $writers = explode(',', $comicData['writers']);
        $comic -> writers = json_encode($writers);
        
        $comic->save();
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        $footerLinks = config('footerLinks');
        return view('comics.show', compact('comic', 'footerLinks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        $footerLinks = config('footerLinks');
        return view('comics.edit', compact('comic', 'footerLinks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $comicData = $request->all();
        $comic->title = $comicData['title'];
        $comic->description = $comicData['description'];
        $comic->price = $comicData['price'];
        $comic->type = $comicData['type'];
        $comic->series = $comicData['series'];

        $artist = explode(',', $comicData['artists']);
        $comic->artists = json_encode($artist);

        $writers = explode(',', $comicData['writers']);
        $comic->writers = json_encode($writers);

        $comic->save();
        return redirect()->route('comics.show', ['comic' => $comic]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
