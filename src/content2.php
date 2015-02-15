<?php
session_start();
if(!isset($_POST['validLogin']) && !isset($_SESSION['validLogin'])) {
  $filePath = explode('/', $_SERVER['PHP_SELF'], -1);
  $filePath = implode('/', $filePath);
  $redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
  header("Location: {$redirect}/login.php", true);
  exit();
}

echo "Here is some content!<br>";

echo "<a href = 'http://web.engr.oregonstate.edu/~sibailaj/cs290/assignment4-part1/src/content1.php'>Click here for Content1</a><br>";

echo "Click <a href='http://web.engr.oregonstate.edu/~sibailaj/cs290/assignment4-part1/src/login.php'>here</a> to logout.";
?>