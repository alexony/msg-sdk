<?php

use Momentum\MarineStoresGuide\ApiClient;

class ApiClientTest extends PHPUnit_Framework_TestCase
{
	public function testClientKeysAreSet()
	{
		$client = new ApiClient('1', '1234567890');
		$this->assertTrue((bool) $client->getClientId());
		$this->assertTrue((bool) $client->getApiSecret());
	}

	// public function textClientVariableIsInstanceOfGuzzle()
	// {
	// 	// $client = new ApiClient();

	// 	// $this->assertInstanceOf('Guzzle\Guzzle\Client', $client->client);
	// }
}