<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\App\Post::truncate();
		foreach (range(1, 20) as $number) {
			\App\Post::create([
				'title' => 'Title '.$number,
				'content' => 'Content '.$number,
				'is_featured' => rand(0, 1),
				'user_id' => $number,
				'created_at' => \Carbon\Carbon::now()->subDays(20)->addDays($number)
			]);
		}
	}
}
