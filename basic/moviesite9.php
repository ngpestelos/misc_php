<?php
  session_start();
  // check to see if user has logged in with a valid password
  if ($_SESSION['authuser'] != 1) {
    echo "Sorry, but you don't have permission to view this page, you loser!";
    exit();
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>My Movie Site - <?php echo $_REQUEST['favmovie'] ?></title>
  </head>
  <body>
  <?php include "header.php" ?>
  <?php
  $favmovies = array("Life of Brian", "Stripes", "Office Space", "The Holy Grail",
    "Matrix", "Terminator 2", "Star Wars", "Close Encounters of the Third Kind",
    "Sixteen Candles", "Caddyshack");

  if (ISSET($_REQUEST['favmovie'])) {
    // Session variables
    echo "Welcome to our site, ";
    echo $_SESSION['username']; // passed via POST
    echo "! <br>"; 
    echo "My favorite movie is ";
    echo $_REQUEST['favmovie'];
    echo "<br>";
    $movierate=5;
    echo "My movie rating for this movie is: ";
    echo $movierate;
  }
  else {
    echo "My top 10 movies are:<br>";

    if (ISSET($_REQUEST['sorted'])) {
      sort($favmovies);
    }

    foreach ($favmovies as $currentvalue) {
      echo $currentvalue;
      echo "<br>\n";
    }
  }
  ?>
  </body>
</html>
