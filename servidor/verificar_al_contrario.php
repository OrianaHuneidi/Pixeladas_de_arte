<?php
session_start(); 

if (isset($_SESSION['sesion'])) {
  header("Location: ../index.php");
  exit();
}
