<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Teachers extends Eloquent
{
	protected $table		= 'teachers';
	protected $primaryKey	= 'teacher_id';
	protected $fillable		= ['nip', 'last_education'];

	public function user()
	{
		require_once(__DIR__ . '/Users.php');
		return $this->belongsTo('users', 'user_id', 'user_id');
	}

	public function schedules()
	{
		require_once(__DIR__ . '/Schedules.php');
		return $this->hasMany('schedules', $this->primaryKey, $this->primaryKey);
	}
}