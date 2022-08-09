<?php

use Illuminate\Database\Seeder;
use App\Music_tone;
class Music_toneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Music_tone::truncate();
        Music_tone::create([
            'title' => '楽しい',
        ]);
        
        Music_tone::create([
            'title' => 'かっこいい',
        ]);
        
        Music_tone::create([
            'title' => 'かわいい',
        ]);
        
        Music_tone::create([
            'title' => '爽快感',
        ]);
        
        Music_tone::create([
            'title' => '切ない',
        ]);
        
        Music_tone::create([
            'title' => 'ゆったり',
        ]);
        
        Music_tone::create([
            'title' => '盛り上がる',
        ]);
        
        Music_tone::create([
            'title' => '悲しい',
        ]);
        
        Music_tone::create([
            'title' => '中毒性が高い',
        ]);
        
        Music_tone::create([
            'title' => 'ジャズっぽい',
        ]);
        
        Music_tone::create([
            'title' => '明るい',
        ]);
        
        Music_tone::create([
            'title' => '感動的',
        ]);
        
        Music_tone::create([
            'title' => 'オシャレ',
        ]);
    }
}
