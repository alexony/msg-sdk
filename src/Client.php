<?php
namespace Momentum\MSGOnline;

class Client
{
	public static $apiKey;
	public $client;

	public function __construct()
	{
		$this->client = new \GuzzleHttp\Client([
			'base_uri' => 'http://vagrant.dev'
		]);
	}

	public function request($path, $config = array(), $method = 'GET')
	{
		$method = strtolower($method);

		$config['headers'] = ['Authorization' => self::$apiKey];
		try {
			$response = $this->client->{$method}($path, $config);
		} catch (\GuzzleHttp\Exception\ClientException $e) {
			$error = json_decode($e->getResponse()->getBody(), true);
			$statusCode = $e->getResponse()->getStatusCode();
			switch ($statusCode) {
				case 401:
					throw new Exception\InvalidCredentialsException($error['error'], 1);
					break;
				default:
					throw new Exception\ClientException($e->getMessage(), 1);
					break;
			}
		}
		return json_decode($response->getBody(), true);
	}

	public function getUserApiKey($username, $password)
	{
		$response= $this->request('authentication/get_access_token', [
			'form_params' => [
				'username' => $username,
				'password' => $password
			]
		], 'POST');

		return $response['access_token'];
	}
	/**
	 * Returns the current access token
	 * @return String The access token
	 */
	public function getApiKey()
	{
		return self::$apiKey;
	}

	/**
	 * Sets the api key for requests
	 * @param String $apiKey Your api key
	 */
	public static function setApiKey($apiKey)
	{
		self::$apiKey = $apiKey;
	}
}
