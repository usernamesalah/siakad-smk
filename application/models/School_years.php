<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class School_years extends Eloquent
{
	protected $table		= 'school_years';
	protected $primaryKey	= 'year_id';
}