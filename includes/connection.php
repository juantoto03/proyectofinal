<?php
  include "config.php";
  $con = mysqli_connect($server,$user,$pass,$db);
  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
