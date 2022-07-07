<?php

use Illuminate\Database\Seeder;
use App\Genre;
class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::truncate();
        Genre::create([
            'title' => 'ロック',
        ]);
        
        Genre::create([
            'title' => 'バラード',
        ]);
        
        Genre::create([
            'title' => 'キャラソン',
        ]);
    }
}
