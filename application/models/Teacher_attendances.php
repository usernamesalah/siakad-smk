<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Teacher_attendances extends Eloquent
{
	protected $table		= 'teacher_attendances';
	protected $primaryKey	= 'attendance_id';

	public function teacher()
	{
		require_once(__DIR__ . '/Teachers.php');
		return $this->hasOne('teachers', 'teacher_id', 'teacher_id');
	}
}