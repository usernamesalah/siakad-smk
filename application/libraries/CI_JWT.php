<?php 
require('vendor/autoload.php');

use \Firebase\JWT\JWT;

class CI_JWT
{
	private $CI;

	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->config->load('app');
		$this->data['key'] = $this->CI->config->item('JWT_KEY');
	}

	public function encode($data)
	{
		return JWT::encode($data, $this->data['key']);
	}

	public function decode($token)
	{
		return JWT::decode($token, $this->data['key'], ['HS256']);
	}
}
