<?php

$conexion=mysqli_connect('localhost','root','','smc_datos');


// Motrar todos los errores de PHP
error_reporting(E_ALL);

// Motrar todos los errores de PHP
ini_set('error_reporting', E_ALL);


$id = $_POST['id'];
$nombres = $_POST['nombres'];
$edad = $_POST['edad'];
$modalidad = $_POST['modalidad'];
$telefono = $_POST['telefono'];
$nvl_estudio = $_POST['nvl_estudio'];
$opciones = $_POST['opciones'];
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO usuarios
		VALUES('$id', '$nombres', '$edad', '$modalidad', '$telefono','$nvl_estudio','$opciones','$descripcion')";

if ( $conexion->query($sql) ) {
	session_start();
	$_SESSION['msg'] = 'Usuario agregado';
	header("Location: index.php");
} else {
	echo "Error al crear usuario";
}

?>