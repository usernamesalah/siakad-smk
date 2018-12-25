<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Attendances extends Eloquent
{
	protected $table		= 'attendances';
	protected $primaryKey	= 'attendance_id';

	public function year()
	{
		require_once(__DIR__ . '/School_years.php');
		return $this->hasOne('school_years', 'year_id', 'year_id');
	}
}