<?php

use Illuminate\Database\Seeder;
use App\Gender;
class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::create([
            'title' => '男性シンガー'
        ]);
        
        Gender::create([
            'title' => '女性シンガー'
        ]);
    }
}
