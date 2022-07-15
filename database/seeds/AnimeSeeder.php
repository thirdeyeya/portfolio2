<?php

use Illuminate\Database\Seeder;

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
