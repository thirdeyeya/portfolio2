<?php

use Illuminate\Database\Seeder;
use App\Anime;
class AnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Anime::truncate();
        Anime::create([
            'title' => '青の祓魔師',
        ]);
        
        Anime::create([
            'title' => 'けいおん！',
        ]);
    }
}
