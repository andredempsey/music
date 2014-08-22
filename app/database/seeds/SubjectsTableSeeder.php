<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SubjectsTableSeeder extends Seeder {

	public function run()
	{
		$seedSubjects = ['Electric Guitar', 'Drums', 'Electric Bass', 'Voice', 'Piano', 'Banjo', 
		'Dobro', 'Mandolin', 'Acoustic Guitar', 'Band', 'Orchestra'];
		for ($i=0; $i < 11; $i++) { 
			Subject::create(['subject' => $seedSubjects[$i]]);
		}
	}

}