<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Schedules extends Eloquent
{
	protected $table		= 'schedules';
	protected $primaryKey	= 'schedule_id';

	public function lesson()
	{
		require_once(__DIR__ . '/Lessons.php');
		return $this->hasOne('lessons', 'lesson_id', 'lesson_id');
	}

	public function class()
	{
		require_once(__DIR__ . '/Classes.php');
		return $this->hasOne('classes', 'class_id', 'class_id');
	}

	public function year()
	{
		require_once(__DIR__ . '/School_years.php');
		return $this->hasOne('school_years', 'year_id', 'year_id');
	}

	public function teacher()
	{
		require_once(__DIR__ . '/Teachers.php');
		return $this->hasOne('Teachers', 'teacher_id', 'teacher_id');
	}

	public function student_attendances()
	{
		require_once(__DIR__ . '/Student_attendances.php');
		return $this->hasMany('Student_attendances', 'schedule_id', 'schedule_id');
	}
}