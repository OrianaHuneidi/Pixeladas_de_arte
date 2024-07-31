<?php

include "./servidor/conexion.php";

$correo = $_SESSION['sesion'];
$query = "SELECT nombre, correo FROM usuario WHERE correo = '$correo'";
$obtener_usuario = $conexion->query($query);

if ($obtener_usuario->num_rows > 0) {
    $usuario = $obtener_usuario->fetch_assoc();
    $nombre = $usuario['nombre'];

    echo "<div>" . $correo . "</div>";
    echo "<div>" . $nombre . "</div>";
}

$obtener_usuario->close();