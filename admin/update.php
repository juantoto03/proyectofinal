<?php
  include('../session/conection.php');

  $number = mysqli_real_escape_string($con, $_GET['number-update']);

  $sql = "SELECT existencia FROM producto";
  $result = mysqli_query($con, $sql);

  if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $total = $row["existencia"] + $number;
      $suma = "UPDATE producto SET existencia='$total' WHERE nombre=foco and modelo=al9";
    }
  }
  mysqli_close($con);
?>
