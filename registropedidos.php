<?php 
	include_once 'conexion.php';
	$id = $_POST['id'];
	$cantidad = $_POST['cantidad'];
	$descripcion = $_POST['descripcion'];
	$total = $_POST['total'];
	
	$sentencia = $bd -> prepare("INSERT INTO pedido (cantidad,descripcion,total) VALUES (?,?,?)");
	$resultado = $sentencia -> execute([$cantidad,$descripcion,$total]);

	if ($resultado) {
		# Condiciona el resultado:
		# Si el resultado me devolvio un TRUE quiere decir que la insercion de datos fue hecha correctamente
		header('Location: tablapedidos.php');
	}else {
		# Si resultado fue FALSE la insercion de datos no fue hecha correctamente
		echo "<p>Error</p>";
	}

 ?>