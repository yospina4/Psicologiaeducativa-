<?php

$conexion=mysqli_connect('localhost','root','','smc_datos');

$id = $_GET['id'];

$sql = "DELETE FROM usuarios WHERE id = $id";


if ( $conexion->query($sql) ) {
	session_start();
	$_SESSION['msg'] = 'Usuario eliminado.';
	header("Location: index.php");
}

?>