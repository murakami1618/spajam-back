<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ScoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scores')->insert([
            [
                'name' => Str::random(10),
                'score' => rand(500,999),
                'date' => date('Y-m-d H:i:s'),
            ], 
            [
                'name' => Str::random(10),
                'score' => rand(100,500),
                'date' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
