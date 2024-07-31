<?php
session_start(); 

if (!isset($_SESSION['sesion'])) {
    header("Location: ./login/index.php");
    exit();
}