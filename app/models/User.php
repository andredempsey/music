<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Laravel\Cashier\BillableTrait;
use Laravel\Cashier\BillableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface, BillableInterface {

	use UserTrait, RemindableTrait, BillableTrait;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	public static $user_rules = [
    	'first_name'=>'required|max:100',
    	'last_name'=>'required|max:100',
    	'email'=>'required|email',
    	'password'=>'required|min:6'
    ];

    const ROLE_ADMIN = 1;
    const ROLE_STUDENT = 2;
    const ROLE_INSTRUCTOR = 3;

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	protected $dates = array('trial_ends_at','subscription_ends_at');

	/**
	* allows retrieval of all posts from the User model
	* syntax $user->posts
	* 
	*/
	public function posts()
	{
	    return $this->hasMany('Post');
	}
	
	/**
	* allows retrieval of subjects from the User model
	* syntax $user->subjects
	*/
	public function subjects()
	{
	    return $this->belongsToMany('Subject');
	}

	/**
	* allows retrieval of styles from the User model
	* syntax $user->styles
	*/
	public function styles()
	{
	    return $this->belongsToMany('Style');
	}

	/**
	* allows retrieval of instructor detail information from the User model
	* syntax $user->detail
	*/
	public function detail()
	{
	    return $this->hasOne('Detail');
	}

	/**
	* allows retrieval of lesson information from the User model (for student)
	* syntax $user->lesson
	*/
	public function studentLessons()
	{
	    return $this->hasMany('Lesson', 'user_id');
	}

	/**
	* allows retrieval of lesson information from the User model (for instructor)
	* syntax $user->lesson
	*/
	public function instructorLessons()
	{
	    return $this->hasMany('Lesson','instructor_id');
	}

	/**
	* allows retrieval of payment information from the User model
	* syntax $user->payments
	*/
	public function payments()
	{
	    return $this->hasManyThrough('Payment','Lesson');
	}

    public static function findByTwitterHandle($twitter_handle)
    {
        $user = self::where('twitter_handle', $twitter_handle)->first();
        return ($user == null) ? App::abort(404) : $user;
    }

    public static function findByTwitterId($twitterId)
    {
        return self::where('user_id', $twitterId)->first();
    }

    public static function findByInstructor($last_name)
    {
        $user = self::where('last_name', $last_name)->where('role_id','<>' ,2)->first();
        return $user;

    }

}
