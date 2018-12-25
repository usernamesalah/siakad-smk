<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Homerooms extends Eloquent
{
	protected $table		= 'homerooms';
	protected $primaryKey	= 'homeroom_id';

	public function teacher()
	{
		require_once(__DIR__ . '/Teachers.php');
		return $this->hasOne('teachers', 'teacher_id', 'teacher_id');
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
}