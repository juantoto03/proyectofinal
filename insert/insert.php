<?php
  $con=mysqli_connect("localhost","root","","tienda");
  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  // escape variables for security
  $name = mysqli_real_escape_string($con, $_POST['nombre']);
  $email = mysqli_real_escape_string($con, $_POST['correo']);
  $password = mysqli_real_escape_string($con, $_POST['pwd']);
  $fechan = mysqli_real_escape_string($con, $_POST['fn']);
  $addres = mysqli_real_escape_string($con, $_POST['addres']);
  $sql="INSERT INTO clientes (nombre, correo, password, fecha_nacimiento, direccion)
    VALUES ('$name', '$email', '$password', '$fechan', '$addres')";

  if (!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
  }
  header("Location:../index.php");

  mysqli_close($con);
?>
