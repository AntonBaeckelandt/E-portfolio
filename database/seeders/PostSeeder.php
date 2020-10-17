<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

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
                'event_name'=> Str::random(10),
                'event_date'=> $this->getRandomTimestamp(),
                'event_location' => Str::random(10),
            ]);
        }
    }

    function getRandomTimestamp($backwardDays = null)
	{
		if ( is_null($backwardDays) )
		{
			$backwardDays = -800;
		}
		$backwardCreatedDays = rand($backwardDays, 0);
		return Carbon::now()->addDays($backwardCreatedDays)->addMinutes(rand(0, 60 * 23))->addSeconds(rand(0, 60));
	}

}
