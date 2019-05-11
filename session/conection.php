<?php

  include('config.php');

  $msj = "No se puede conectar a la Base de Datos";

  $con = mysqli_connect($server, $user, $pass, $db) or die
  ("Problema con la Conexion");
  $con = new mysqli($server, $user, $pass, $db) or die ($msj);
  $acent = $con->query("SET NAME 'utf8'");

  if (mysqli_connect_errno()) {
    echo "La conexion a fallado", mysqli_connect_errno();
    exit();
  }
?>
