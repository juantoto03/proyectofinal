<?php
  include('../session/conection.php');

  $name = mysqli_real_escape_string($con, $_GET['name-delete']);
  $model = mysqli_real_escape_string($con, $_GET['model-delete']);

  //sql to delete a record
  $sql = "DELETE FROM producto WHERE nombre='$name' and modelo='$model'";

  if(mysqli_query($con, $sql)) {
    header("Location:../admin/index.php?delete=true");
  }else {
    header("Location:../admin/index.php?errordelete=true");
  }
  mysqli_close($con);
?>
