<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Lessons extends Eloquent
{
	protected $table		= 'lessons';
	protected $primaryKey	= 'lesson_id';

	public function department()
	{
		require_once(__DIR__ . '/Departments.php');
		return $this->hasOne('departments', 'department_id', 'department_id');
	}
}