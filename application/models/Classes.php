<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Classes extends Eloquent
{
	protected $table		= 'classes';
	protected $primaryKey	= 'class_id';

	public function homeroom()
	{
		require_once(__DIR__ . '/Homerooms.php');
		return $this->hasOne('homerooms', 'class_id', 'class_id');
	}

	public function homerooms()
	{
		require_once(__DIR__ . '/Homerooms.php');
		return $this->hasMany('homerooms', 'class_id', 'class_id');
	}

	public function members()
	{
		require_once(__DIR__ . '/Class_members.php');
		return $this->hasMany('class_members', 'class_id', 'class_id');
	}
}