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
        Music::create([
            'title' => 'CORE PRIDE',
            'artist_name' => 'UVERworld',
            'anime_official_cite' => 'https://www.ao-ex.com/tv/',
            'artist_official_cite' => 'https://www.uverworld.jp/',
            'image_path' => 'https://m.media-amazon.com/images/I/51qSKm5X-ZL._AC_.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => 1
        ]);
        
        Music::create([
            'title' => 'ふわふわ時間',
            'artist_name' => '放課後ティータイム',
            'anime_official_cite' => 'https://www.tbs.co.jp/anime/k-on/',
            'artist_official_cite' => 'https://www.tbs.co.jp/anime/k-on/',
            'image_path' => 'https://img.hmv.co.jp/image/jacket/400/35/5/9/994.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => 1
        ]);
    }
}
