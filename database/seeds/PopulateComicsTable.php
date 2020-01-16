<?php

use App\Comic;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PopulateComicsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newComicsData = [
                'Titolo' => $faker->word,
                'Autore' => $faker ->word,
                'Anno' => $faker->year,
                'Recensione' => $faker->text,
                'Voto' => $faker->randomNumber
            ];

            $movie = new Comic;
            $movie->fill($newComicsData);
            $movie->save();
        }
    }
}
