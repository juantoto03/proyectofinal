<?php
  include('../session/conection.php');

  $name = mysqli_real_escape_string($con, $_GET['name-update']);
  $model = mysqli_real_escape_string($con, $_GET['model-update']);

  $_SESSION['usuario'] = $user;

  $consult="SELECT * FROM producto WHERE nombre='$name' and  modelo='$model'";
  $result=mysqli_query($con, $consult);
  $filas=mysqli_num_rows($result);

  if($filas > 0) {
    header("Location:../admin/index.php?search=true");
  }else {
    header("Location:../admin/index.php?errorsearch=true");
  }
?>
