<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);

		require 'vendor/autoload.php';

		// $client = new Momentum\MSGOnline\Client();

		// $response = $client->getUserApiKey('alec@builtwithmomentum.com', 'password');

		Momentum\MSGOnline\Client::setApiKey('baf9006f14909d21e5acf022efca1b15');

		$user = new Momentum\MSGOnline\User();
		
		$response = $user->getCurrentUser();

		var_dump($response);

	?>

</body>
</html>