<?php
require('autoload.php');
use jenkins\phpunit\conversion;
$unitFrom = '';
$unitTo = '';
$result = 0;
$c = new conversion;

if (isset($_POST['submit'])) {
	$input = $_POST['input'];
	$unitFrom = $_POST['unit-from'];
	$unitTo = $_POST['unit-to'];

	$function = $unitFrom.'To'.$unitTo;
	
	if (method_exists($c, $function)) {

		$result = $c->$function($input);
	}
}

include('view/index.html.php');
?>