<?php
session_start();
$_SESSION = array();
session_destroy();
?>
<html>
  <head>
    <title>login.php</title>
  </head>
  <body>
    <form action="//web.engr.oregonstate.edu/~sibailaj/cs290/assignment4-part1/src/content1.php" method = "post">
   	  Username:
   	  <input type="text" name="username">
      <input type="hidden" name="validLogin" value="true">
   	  <button type="submit">Login</button>
   	</form>
  </body>
</html>