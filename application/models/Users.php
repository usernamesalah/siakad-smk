<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Users extends Eloquent
{
	protected $table		= 'users';
	protected $primaryKey	= 'user_id';

	public function student()
	{
		require_once(__DIR__ . '/Students.php');
		return $this->hasOne('students', $this->primaryKey, $this->primaryKey);
	}

	public function teacher()
	{
		require_once(__DIR__ . '/Teachers.php');
		return $this->hasOne('teachers', $this->primaryKey, $this->primaryKey);
	}
}