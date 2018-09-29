<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	public function run()
	{
		$user = new User;
		$user->name = 'Admin';
		$user->email = 'admin@test.com';
		$user->password = bcrypt('admin');
		$user->is_admin = true;
		$user->save();
	}
}
