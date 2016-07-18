<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
/**
* 
*/
class TablaUsuarioSeeder extends seeder
{
	
	public function run()
	{

		$faker =Faker::create();
         
         for($i=0; $i<30; $i++){

		\DB::table('users')->insert(array(
          'name'     => $faker->firstName,
          'email'    => $faker->unique()->email,
          'password' => \Hash::make('secret'),
          'idRoles'  => $faker->numberBetween($min = 1, $max = 2)
			));
	}
	}
}