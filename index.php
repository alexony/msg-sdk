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

		$products = new Momentum\MSGOnline\Product();

		var_dump($products->search(array(
			'category_id' => '698'
		)));
	?>

</body>
</html>