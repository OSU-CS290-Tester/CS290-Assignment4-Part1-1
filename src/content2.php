<?php
session_start();

echo "<a href = 'http://web.engr.oregonstate.edu/~sibailaj/cs290/assignment4-part1/src/content1.php'>Click here for Content1</a><br>";

if (isset($_SESSION['username'])) {
	echo "$_SESSION[username]\n";
}

echo $_SESSION['visits'];

echo "Hello, $_SESSION[username]! You have visited this page $_SESSION[visits] times before.";
echo "Click <a href='http://web.engr.oregonstate.edu/~sibailaj/cs290/assignment4-part1/src/login.php'>here</a> to logout.";

?>