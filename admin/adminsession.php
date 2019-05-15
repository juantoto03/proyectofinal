<?php
  session_start();

  include('../session/conection.php');

  $user=mysqli_real_escape_string($con, $_POST['user']);
  $pass=mysqli_real_escape_string($con, $_POST['pwd']);

  $_SESSION['usuario'] = $user;

  $consult="SELECT * FROM useradmin WHERE usuario='$user' and  password='$pass'";
  $result=mysqli_query($con, $consult);
  $filas=mysqli_num_rows($result);

  if($filas > 0) {
    header("Location:../admin/index.php");
  }else {
    echo $filas;
    header("Location:../admin/login.php?error=true");
  }
?>
