<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = \Faker\Factory::create('zh_TW');
		foreach (range(1, 20) as $number) {
			\App\User::create([
				'name' => $faker->userName,
				'email' => $faker->email,
				'password' => $faker->password
			]);
		}
	}
}
