<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class StylesTableSeeder extends Seeder {

	public function run()
	{
		$seedStyles = ['Sight Reading', 'Music Theory', 'Improvisation', 'Rock', 'Metal', 'Alternative', 
		'Blues', 'Acoustic', 'Ensemble Performance', 'Classical', 'Popular', 'Ear Training', 'Bluegrass', 'Country'];

		$seedStyleLink = ['http://en.wikipedia.org/wiki/Sight-reading', 'http://en.wikipedia.org/wiki/Music_theory', 
		'http://en.wikipedia.org/wiki/Improvisation#Music', 'http://en.wikipedia.org/wiki/Rock_music', 
		'http://en.wikipedia.org/wiki/Metal_music', 'http://en.wikipedia.org/wiki/Alternative_rock', 
		'http://en.wikipedia.org/wiki/Blues', 'http://en.wikipedia.org/wiki/Acoustic_guitar', 
		'http://en.wikipedia.org/wiki/Musical_ensemble', 'http://en.wikipedia.org/wiki/Classical_music', 
		'http://en.wikipedia.org/wiki/Popular_music', 'http://en.wikipedia.org/wiki/Ear_training', 
		'http://en.wikipedia.org/wiki/Bluegrass_music', 'http://en.wikipedia.org/wiki/Country_music'];

		for ($i=0; $i < 14; $i++) { 
			Style::create(['style' => $seedStyles[$i],'style_link' => $seedStyleLink [$i]]);
		}
	}

}