<html>
  <head>
    <title>loopback.php</title>
  </head>
  <body>
  

<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

$jsonString = "";

//Accept GET Parameters
if (empty($_GET)) {
	echo '{"Type":"GET","parameters":null}<br>';
} else {
	echo '{"Type":"GET","parameters":' . json_encode($_GET) . '}<br>';
}

//Accept POST Parameters
if (empty($_POST)) {
	echo '{"Type":"POST","parameters":null}<br>';
} else {
	echo '{"Type":"POST","parameters":' . json_encode($_POST) . '}<br>';
}

?>




  </body>
</html>