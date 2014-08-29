<?php

class Lesson extends Eloquent {
	
	protected $table = 'lessons';

	/**
	* allows retrieval of lesson information from the User model
	* syntax $user->lesson
	*/
	public function instructor()
	{
	    return $this->hasOne('User');
	}
	
}