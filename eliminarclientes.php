<?php 
	include_once 'conexion.php';
	$id = $_GET['id'];
	$sentencia = $bd -> prepare("DELETE FROM clientes WHERE id = ?");
	$resultado = $sentencia -> execute([$id]);
	if ($resultado) {
		# si se elimino correctamente
		header('Location: tablaclientes.php');
	}
 ?>
 