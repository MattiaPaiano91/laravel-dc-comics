<?php

namespace Database\Seeders;

// Models
use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');
        Comic::truncate();
        foreach ($comics as $index => $comic) {
            $singleComic = new Comic();
            $singleComic->title = $comic['title'];
            $singleComic->description = $comic['description'];
            $singleComic->thumb = $comic['thumb'];
            $explodedPrice = explode('$', $comic['price']);
            $singleComic->price = floatval($explodedPrice[1]);
            $singleComic->series = $comic['series'];
            $singleComic->sale_date = $comic['sale_date'];
            $singleComic->type = $comic['type'];
            $singleComic->artists = json_encode($comic['artists']);
            $singleComic->writers = json_encode($comic['writers']);
            $singleComic->save();
        }
    }
}


            
