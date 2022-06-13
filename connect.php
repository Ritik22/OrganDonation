<?php

$connection = mysqli_connect('localhost', 'root', '', 'organ');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to database: " . mysqli_connect_error();
  }
mysqli_select_db($connection, "organ");
?>