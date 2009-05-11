<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Please Log In</title>
  </head>
  <body>
  <?php include "header.php" ?>
  <?php
  session_unset();
  ?>
  <form method="post" action="http://localhost/php/misc/basic/movie9.php">
    <p>
      Enter your username:
      <input type="text" name="user" />
    </p>
    <p>
      Enter your password:
      <input type="password" name="pass" />
    </p>
    <p>
      <input type="submit" name="Submit" value="Submit" />
    </p>
  </form>
  </body>
</html>
