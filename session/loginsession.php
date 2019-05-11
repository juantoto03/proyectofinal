<?php
  session_start();

  include('conection.php');

  $user=mysqli_real_escape_string($con, $_POST['user']);
  $pass=mysqli_real_escape_string($con, $_POST['pwd']);

  $_SESSION['usuario'] = $user;

  $consult="SELECT * FROM clientes WHERE correo='$user' and  password='$pass'";
  $result=mysqli_query($con, $consult);
  $filas=mysqli_num_rows($result);

  if($filas > 0) {
    header("Location:../blank.html");
  }else {
    echo $filas;
    header("Location:../index.php?error=true");
  }
?>
