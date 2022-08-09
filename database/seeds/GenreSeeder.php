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
        
        Genre::create([
            'title' => 'J-POP',
        ]);
        
        Genre::create([
            'title' => 'R&B',
        ]);
        
        Genre::create([
            'title' => 'ジャズ',
        ]);
        
        Genre::create([
            'title' => 'ポップ',
        ]);
        
        Genre::create([
            'title' => 'エレクトロニック',
        ]);
        
        Genre::create([
            'title' => 'ヒップホップ',
        ]);
        
        Genre::create([
            'title' => 'オルタナティブ',
        ]);
        
        Genre::create([
            'title' => 'ラップ',
        ]);
    }
}
