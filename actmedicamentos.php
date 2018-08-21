<?php 
	include_once 'conexion.php';
	$id = $_POST['id'];
	$descripcion = $_POST['descripcion'];
	$cantidad = $_POST['cantidad'];

	$sentencia = $bd -> prepare("UPDATEmedicamentos SET id = ?,descripcion = ?,cantidad = ?");
	$resultado = $sentencia -> execute([$id,$descripcion,$cantidad]);

	if ($resultado) {
		# Condiciona el resultado:
		# Si el resultado me devolvio un TRUE quiere decir que la insercion de datos fue hecha correctamente
		header('Location: medicamentos.php');
	}else {
		# Si resultado fue FALSE la insercion de datos no fue hecha correctamente
		echo "<p>Error</p>";
	}

 ?>