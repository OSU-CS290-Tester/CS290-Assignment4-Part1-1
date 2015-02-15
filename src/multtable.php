<html>
<head>
  <title>multtable.php</title>
</head>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$validInput = true;

function inputCheck($validInput) {
	if ($validInput == false) {
		exit();
	}
}

if (isset($_GET['min-multiplicand']) == false) {
	echo "Missing parameter min-multiplicand.<br>";
	$validInput = false;
}

if (isset($_GET['max-multiplicand']) == false) {
	echo "Missing parameter max-multiplicand.<br>";
	$validInput = false;
}

if (isset($_GET['min-multiplier']) == false) {
	echo "Missing parameter min-multiplier.<br>";
	$validInput = false;
}

if (isset($_GET['max-multiplier']) == false) {
	echo "Missing parameter max-multiplier.<br>";
	$validInput = false;
}

inputCheck($validInput);

foreach($_GET as $key => $value) {
	if (ctype_digit($value) == false) {
		echo "$key must be an integer.<br>";
		$validInput = false;
	}
}

inputCheck($validInput);

if ($_GET['min-multiplicand'] > $_GET['max-multiplicand']) {
	echo "Minimum multiplicand larger than maximum.<br>";
	exit();
}

if ($_GET['min-multiplier'] > $_GET['max-multiplier']) {
	echo "Minimum multiplier larger than maximum.<br>";
	exit();
}
?>
<p>
<table border="1">
<tr>   <td>
<?php

$tableHeight = (int)$_GET['max-multiplicand'] - (int)$_GET['min-multiplicand'] + 2;
$tableWidth = (int)$_GET['max-multiplier'] - (int)$_GET['min-multiplier'] + 2;

$multipliers = array();
$multiplicands = array();

//Calculate Row of Multipliers
for ($i = (int)$_GET['min-multiplier']; $i <= (int)$_GET['max-multiplier']; $i++ ) {
	$multipliers[] = $i;
}

//Calculate Column of Multiplicands
for ($i = (int)$_GET['min-multiplicand']; $i <= (int)$_GET['max-multiplicand']; $i++ ) {
	$multiplicands[] = $i;
}

//var_dump($multipliers);
//var_dump($multiplicands);

foreach($multipliers as $multiplierKey => $multiplierValue) {
	echo '<td>' . $multiplierValue;
}

foreach($multiplicands as $multiplicandKey => $multiplicandValue) {
	echo '<tr><td>' . $multiplicandValue;
	foreach($multipliers as $multiplierKey => $multiplierValue) {
		echo '<td>' . ($multiplierValue * $multiplicandValue);
	}
}

echo '<table>';

?>
  </body>
</html>


