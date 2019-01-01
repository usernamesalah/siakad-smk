<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Students extends Eloquent
{
	protected $table		= 'students';
	protected $primaryKey	= 'student_id';

	public function user()
	{
		require_once(__DIR__ . '/Users.php');
		return $this->belongsTo('users', 'user_id', 'user_id');
	}

	public function scores()
	{
		require_once(__DIR__ . '/Scores.php');
		return $this->hasMany('scores', 'student_id', 'student_id');
	}

	public function attendances()
	{
		require_once(__DIR__ . '/Student_attendances.php');
		return $this->hasMany('student_attendances', 'student_id', 'student_id');
	}

	public function attendance()
	{
		require_once(__DIR__ . '/Student_attendances.php');
		return $this->hasOne('student_attendances', 'student_id', 'student_id');
	}
}