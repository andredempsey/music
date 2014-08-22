<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$first = ['Art', 'Tom', 'George', 'Oscar', 'Sarah'];

		$last = ['Villarreal', 'Lopez', 'Byrnes', 'Peche', 'Murphy'];
		
		$email = ['artmv1@yahoo.com', 'tomlo7997@gmail.com', 'banjer6028@aol.com', 'oapeche@hotmail.com', 'sarahmurphy1492@gmail.com'];

		$phone = ['(210)-748-7054', '(210)-542-4055', '(210)-649-2403', '(210)-663-5481', '(210)-416-1000'];

		for ($i=0; $i < 5; $i++) { 
			User::create(['first_name' => $first[$i], 'last_name' => $last[$i], 'email' => $email[$i],
				'phone' => $phone[$i], 'role_id' => 3]);
		}
	}

}