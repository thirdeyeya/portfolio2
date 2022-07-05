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
        Music_tone::create([
            'title' => '楽しい',
        ]);
        
        Music_tone::create([
            'title' => 'かっこいい',
        ]);
    }
}
