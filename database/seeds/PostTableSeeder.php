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
		$faker = \Faker\Factory::create('zh_TW');
		foreach (range(1, 20) as $number) {
			\App\Post::create([
				'title' => $faker->sentence,
				'content' => $faker->realText(),
				'is_featured' => rand(0, 1),
				'user_id' => $number,
				'created_at' => \Carbon\Carbon::now()->subDays(20)->addDays($number)
			]);
		}
	}
}
