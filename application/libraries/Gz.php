<?php 
require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

class Gz
{
	private $CI;

	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->config->load('app');
		$this->api_url 		= $this->CI->config->item('API_URL');
		$this->api_key 		= $this->CI->config->item('API_KEY');
		$this->client = new Client([
			'base_uri' 	=> $this->api_url,
			'headers'	=> [
				'X-Api-Key'	=> $this->api_key,
				'Accept'	=> 'application/json;charset=utf-8'
			]
		]);
	}

	public function GET($url)
	{
		try
		{
			$response = $this->client->get($url);
			$body 		= $response->getBody();
			return $body->getContents();
		}
		catch (RequestException $e)
		{
			return $e->getResponse()->getBody()->getContents();
		}
	}

	public function POST($url, $data)
	{
		try
		{
			$response 	= $this->client->request('POST', $url, ['form_params' => $data]);
			$body 		= $response->getBody();
			return $body->getContents();
		}
		catch (Exception $e)
		{
			return $e->getResponse()->getBody()->getContents();
		}	
	}
}