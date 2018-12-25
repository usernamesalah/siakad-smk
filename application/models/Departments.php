<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Departments extends Eloquent
{
	protected $table		= 'departments';
	protected $primaryKey	= 'department_id';
}