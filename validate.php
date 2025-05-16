<?php

session_start();
  $valid_username = "Tahj";
  $valid_password = "password";

  $username = $_REQUEST['username'];
  $_SESSION['username'] = $username;
  $password = $_REQUEST['password'];
  if ($valid_username == $username && $valid_password == $password)
  {
    $_SESSION['authenticated'] = 1;
    header ('location: /');
  }
  else
  {
  if (!isset($_SESSION['failed_attempts'])) {
    $_SESSION['failed_attempts'] = 1;
  } else {
    $_SESSION['failed_attempts'] = $_SESSION['failed_attempts'] + 1;
  }

  echo "<p style='color:red;'>Login failed. Invalid username or password.</p>";
  echo "<p>Attempt number: " . $_SESSION['failed_attempts'] . "</p>";
  echo "<p><a href='/login.php'>Try again</a></p>";

  }
  
  
?>