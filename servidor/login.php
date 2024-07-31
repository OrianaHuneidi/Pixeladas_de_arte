<?php
session_start();

require './conexion.php';

$correo = $_POST[ 'correo' ];
$pass = $_POST[ 'pass' ];

$query = "SELECT pass FROM usuario WHERE correo = '$correo'";
$result = $conexion->query( $query );

if ( $result->num_rows > 0 ) {
    $row = $result->fetch_assoc();
    $hashed_pass = $row[ 'pass' ];

    if ( password_verify( $pass, $hashed_pass) ) {
        $_SESSION[ 'sesion' ] = $correo;

        $_SESSION[ 'mensage' ] = 'Inicio de sesión exitoso. Bienvenido, ' . $_SESSION[ 'sesion' ];
        header( 'Location: ../index.php' );
        exit();
    } else {
        $_SESSION[ 'error' ] = 'Usuario o contraseña incorrectos.';
        header( 'Location: ../login/index.php' );
        exit();
    }
} else {
    $_SESSION[ 'error' ] = 'Usuario no existe.';
    header( 'Location: ../login/index.php' );
    exit();
}

$conexion->close();