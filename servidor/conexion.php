<?php
  $conexion = mysqli_connect('localhost', 'root', '', 'login');

  if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
  }