<?php
session_start();

require './conexion.php';

$correo = $_POST[ 'correo' ];
$nombre = $_POST[ 'nombre' ];
$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT); 

echo $correo." - ".$nombre." - ".$pass;

$registro = $conexion->prepare("INSERT INTO usuario (correo, nombre, pass) VALUES (?, ?, ?)");
$registro->bind_param("sss", $correo, $nombre, $pass);
$registro->execute();

if ($registro->execute()) {
    $_SESSION['mensaje'] = "¡Registro exitoso! Bienvenido, " . $nombre;
    header("Location: ../login/index.php");
    exit();
} else {
    $_SESSION['error'] = "Error al registrar el usuario.";
    header("Location: ../registro/index.php");
    exit();
}

$registro->close();
$conexion->close();