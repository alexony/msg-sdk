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

		$client = new Momentum\MSGOnline\Client('87a00b085ec42c6f555a3fba82416966');

		$products = new Momentum\MSGOnline\Product();

		// echo "<pre>";
		// print_r($products->all()->current());
		foreach($products->all() as $product)
		{	
			echo "<pre><hr>";
			print_r($product);
		}
	?>

</body>
</html>