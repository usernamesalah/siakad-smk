<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Score_types extends Eloquent
{
	protected $table		= 'score_types';
	protected $primaryKey	= 'type_id';
}