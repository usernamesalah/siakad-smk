<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Scores extends Eloquent
{
	protected $table		= 'scores';
	protected $primaryKey	= 'score_id';

	public function type()
	{
		require_once(__DIR__ . '/Score_types.php');
		return $this->belongsTo('score_types', 'type_id', 'type_id');
	}
}