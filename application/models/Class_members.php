<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Class_members extends Eloquent
{
	protected $table		= 'class_members';
	protected $primaryKey	= 'member_id';

	public function year()
	{
		require_once(__DIR__ . '/School_years.php');
		return $this->belongsTo('school_years', 'year_id', 'year_id');
	}

	public function class()
	{
		require_once(__DIR__ . '/Classes.php');
		return $this->belongsTo('classes', 'class_id', 'class_id');
	}

	public function student()
	{
		require_once(__DIR__ . '/Students.php');
		return $this->belongsTo('students', 'student_id', 'student_id');
	}
}