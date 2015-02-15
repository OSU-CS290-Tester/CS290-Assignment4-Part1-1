<?php
session_start();
if(!isset($_SESSION['username'])) {
  $filePath = explode('/', $_SERVER['PHP_SELF'], -1);
  $filePath = implode('/', $filePath);
  $redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
  header("Location: {$redirect}/login.php", true);
  exit();
}
?>
<html>
  <head>
    <title>content1.php</title>
  </head>
  <body>

<?php 

if (isset($_POST['username'])) {
  $_SESSION['username'] = $_POST['username'];
}
if ($_SESSION['username'] == "") {
  echo "A username must be entered. Click <a href='http://web.engr.oregonstate.edu/~sibailaj/cs290/assignment4-part1/src/login.php'>here</a> to return to the login screen.";
  exit(); 
}

/*
if (empty($_POST['username']) && !isset($_SESSION['username'])) {
  echo "A username must be entered. Click <a href='http://web.engr.oregonstate.edu/~sibailaj/cs290/assignment4-part1/src/login.php'>here</a> to return to the login screen.";
  exit();
}
*/

echo "<a href='http://web.engr.oregonstate.edu/~sibailaj/cs290/assignment4-part1/src/content2.php'>Click here for Content2</a><br>";



if (!isset($_SESSION['visits'])) {
  $_SESSION['visits'] = 0;
} else {
  $_SESSION['visits']++;
}

echo "Hello, $_SESSION[username]! You have visited this page $_SESSION[visits] times before.";
echo "Click <a href='http://web.engr.oregonstate.edu/~sibailaj/cs290/assignment4-part1/src/login.php'>here</a> to logout.";

?>
  </body>
</html>