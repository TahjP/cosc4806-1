<?php
session_start();
// Check if the user is logged in
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] != 1)
{
  // Redirect to the login page if not logged in
  header('location: /login.php');
  exit;
}
?>


<!DOCTYPE html>
<html>
  <head>
   <title>Tahj</title>
  </head>
  
  <body>
    <h1>Assignment 1</h1>

    <p>Welcome, <?=$_SESSION['username'] ?></p>

  
 
  </body>

  <footer>
    <p> <a href= "/logout.php"> Click here to logout </a></p>

  </footer>    
</html>