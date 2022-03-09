<?php

use App\Comic;

use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config("Comic");

        foreach($comics as $elemento){
            $newComic = new Comic();
            $newComic->title = $elemento["title"];
            $newComic->description = $elemento["description"];
            $newComic->thumb = $elemento["thumb"];
            $newComic->price = $elemento["price"];
            $newComic->series = $elemento["series"];
            $newComic->sale_date = $elemento["sale_date"];
            $newComic->type = $elemento["type"];
            $newComic->save();
        }
    }
}
