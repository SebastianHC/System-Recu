<?php 
	include_once 'conexion.php';
	$id_alu = $_GET['id'];
	$sentencia = $bd -> prepare("DELETE FROM medicamentos WHERE id = ?");
	$resultado = $sentencia -> execute([$id]);
	if ($resultado) {
		# si se elimino correctamente
		header('Location: tablamedicamentos.php');
	}
 ?>
 