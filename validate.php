<?php

  $valid_username = "Tahj";
  $valid_password = "password";

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];
  if ($valid_username == $username && $valid_password == $password)
  {
    echo "Welcome $username";
  }
  else
  {
    echo "Invalid username or password";
  }
  
  
?>