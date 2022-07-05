<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GenreSeeder::class);
        $this->call(Music_toneSeeder::class);
        $this->call(GenderSeeder::class);
        $this->call(MusicSeeder::class);
    }
}
