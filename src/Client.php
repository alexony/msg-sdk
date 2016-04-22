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

	public function request($path, $config = array())
	{
		$config['headers'] = ['Authorization' => self::$apiKey];
		try {
			$response = $this->client->get($path, $config);
		} catch (\GuzzleHttp\Exception\ClientException $e) {
			$error = json_decode($e->getResponse()->getBody(), true);
			switch ($error['error']) {
				case "Your access token isn't valid.":
					throw new \Momentum\MSGOnline\Exceptions\InvalidCredentialsException($error['error'], 1);
					break;
				default:
					throw new \Exception($e->getMessage(), 1);
					break;
			}
		}
		return json_decode($response->getBody(), true);
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
