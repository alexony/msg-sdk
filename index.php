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

		Momentum\MSGOnline\Client::setApiKey('87a00b085ec42c6f555a3fba82416966');

		$category = new Momentum\MSGOnline\Category();
		var_dump($category->all(true));
	?>

</body>
</html>