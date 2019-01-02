<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Headmasters extends Eloquent
{
	protected $table		= 'headmasters';
	protected $primaryKey	= 'headmaster_id';

	public function user()
	{
		require_once(__DIR__ . '/Users.php');
		return $this->hasOne('users', 'user_id', 'user_id');
	}
}