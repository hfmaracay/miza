<?php

namespace Database\Seeders;

use App\Models\User;
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
    $admin = User::factory()->create([
      'name' => 'Dayan Betancourt',
    	'email' => 'dkbetancourt@gmail.com',
    	'email_verified_at' => now(),
    	'password' => bcrypt('dayan123')
    ]);
    
    $admin->assign('admin');

    $admin = User::factory()->create([
      'name' => 'José Clavijo',
    	'email' => 'miza.ucv@gmail.com',
    	'email_verified_at' => now(),
    	'password' => bcrypt('mizawebpepe')
    ]);
    
    $admin->assign('admin');
  }
}
