<?php 


$conexion=mysqli_connect('localhost','root','','smc_datos');


// Motrar todos los errores de PHP
error_reporting(E_ALL);

// Motrar todos los errores de PHP
ini_set('error_reporting', E_ALL);


$id = $_GET['id'];
$nombres = $_POST['nombres'];
$edad = $_POST['edad'];
$modalidad = $_POST['modalidad'];
$telefono = $_POST['telefono'];
$nvl_estudio = $_POST['nvl_estudio'];
$opciones = $_POST['opciones'];
$descripcion = $_POST['descripcion'];


$sql = "UPDATE usuarios
		SET nombres = '$nombres', edad = '$edad', modalidad = '$modalidad', telefono = '$telefono', nvl_estudio = '$nvl_estudio', opciones = '$opciones', descripcion = '$descripcion'
		WHERE id = $id ";

if ( $conexion->query($sql) ) {
	session_start();
	$_SESSION['msg'] = 'Datos actualizados';
	header("Location: index.php");
	/*header("Location: show.php?id=" . $id);*/
}


?>