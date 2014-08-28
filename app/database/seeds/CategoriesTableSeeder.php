<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		$seedStyles = ['Sight Reading', 'Music Theory', 'Improvisation', 'Rock', 'Metal', 'Alternative', 
		'Blues', 'Acoustic', 'Ensemble Performance', 'Classical', 'Popular', 'Ear Training', 'Bluegrass', 'Country'];

		for ($i=0; $i < 14; $i++) { 
			Category::create(['tagname' => $seedStyles[$i]]);
		}
	}

}