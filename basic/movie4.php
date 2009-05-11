<?php
  session_start();
  $_SESSION['username'] = "Joe12345";
  $_SESSION['authuser'] = 1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Find my Favorite Movie!</title>
  </head>
  <body>
  <?php
    // Special Characters in URLs
    $myfavmovie = urlencode("Life of Brian");
    echo "<a href='http://localhost/php/misc/basic/moviesite4.php?favmovie=$myfavmovie'>";
    echo "Click here to see information about my favorite movie!";
    echo "</a>";
  ?>
  </body>
</html>
