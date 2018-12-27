<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Scores extends Eloquent
{
	protected $table		= 'scores';
	protected $primaryKey	= 'score_id';
	protected $fillable		= ['score', 'additional_info'];

	public function type()
	{
		require_once(__DIR__ . '/Score_types.php');
		return $this->belongsTo('score_types', 'type_id', 'type_id');
	}

	public function lesson()
	{
		require_once(__DIR__ . '/Lessons.php');
		return $this->belongsTo('Lessons', 'lesson_id', 'lesson_id');
	}
}