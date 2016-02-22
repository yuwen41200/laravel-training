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
		foreach (range(1, 20) as $number) {
			\App\User::create([
				'name' => 'Name '.$number,
				'email' => 'Email '.$number,
				'password' => 'Password '.$number
			]);
		}
	}
}
