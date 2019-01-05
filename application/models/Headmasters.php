<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Headmasters extends Eloquent
{
	protected $table		= 'headmasters';
	protected $primaryKey	= 'headmaster_id';
	protected $fillable		= ['start_period', 'end_period'];

	public function user()
	{
		require_once(__DIR__ . '/Users.php');
		return $this->belongsTo('users', 'user_id', 'user_id');
	}
}