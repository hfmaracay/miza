<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $admin = factory(User::class)->create([
    	'name' => 'Dayan Betancourt',
    	'email' => 'dkbetancourt@gmail.com',
    	'email_verified_at' => now(),
    	'password' => bcrypt('dayan123'),
    ]);

    $admin->assign('admin');
  }
}
