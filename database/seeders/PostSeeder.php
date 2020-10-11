<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Mock posts
        $count = 10;
        for($i = 0; $i < $count; $i++){
            DB::table('posts')->insert([
                'title' => Str::random(10),
                'description' => Str::random(40),
                'content' => Str::random(500),
            ]);
        }
    }
}
