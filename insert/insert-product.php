<?php
  $con=mysqli_connect("localhost","root","","tienda");
  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  // escape variables for security
  $name = mysqli_real_escape_string($con, $_POST['nameadd']);
  $model = mysqli_real_escape_string($con, $_POST['model-add']);
  $description = mysqli_real_escape_string($con, $_POST['description-add']);
  $price = mysqli_real_escape_string($con, $_POST['price-add']);
  $existence = mysqli_real_escape_string($con, $_POST['exitence-add']);
  $line = mysqli_real_escape_string($con, $_POST['line-add']);
  $sql="INSERT INTO producto (nombre, modelo, descripcion, precio, existencia, linea)
    VALUES ('$name', '$model', '$description', '$price', '$existence', '$line')";

  if (!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
  }
  header("Location:../admin/index.php?add=true");

  mysqli_close($con);
?>
