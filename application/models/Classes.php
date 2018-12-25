<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Classes extends Eloquent
{
	protected $table		= 'classes';
	protected $primaryKey	= 'class_id';
}