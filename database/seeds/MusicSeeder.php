<?php

use Illuminate\Database\Seeder;
use App\Music;
class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Music::truncate();
        Music::create([
            'title' => 'CORE PRIDE',
            'artist_name' => 'UVERworld',
            'anime_official_cite' => 'https://www.ao-ex.com/tv/',
            'artist_official_cite' => 'https://www.uverworld.jp/',
            'image_path' => 'img/CORE PRIDE.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性シンガー')
        ]);
        
        Music::create([
            'title' => 'ふわふわ時間',
            'artist_name' => '放課後ティータイム',
            'anime_official_cite' => 'https://www.tbs.co.jp/anime/k-on/',
            'artist_official_cite' => 'https://www.tbs.co.jp/anime/k-on/',
            'image_path' => 'img/huwahuwatime.jpg',
            'genre_id' => 2,
            'music_tone_id' => 1,
            'gender_id' => config('gender.女性シンガー')
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
