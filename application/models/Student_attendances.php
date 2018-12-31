<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Student_attendances extends Eloquent
{
	protected $table		= 'student_attendances';
	protected $primaryKey	= 'attendance_id';

	public function schedule()
	{
		require_once(__DIR__ . '/Schedules.php');
		return $this->hasOne('schedules', 'schedule_id', 'schedule_id');
	}

	public function student()
	{
		require_once(__DIR__ . '/Students.php');
		return $this->hasOne('students', 'student_id', 'student_id');
	}
}