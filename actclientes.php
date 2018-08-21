<?php 
	include_once 'conexion.php';
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$email = $_POST['correo'];
	$telefono = $_POST['telefono'];

	$sentencia = $bd -> prepare("UPDATE clientes SET id = ?,nombre = ?,correo = ? ,telefono = ?");
	$resultado = $sentencia -> execute([$id,$nombre,$correo,$telefono]);

	if ($resultado) {
		# Condiciona el resultado:
		# Si el resultado me devolvio un TRUE quiere decir que la insercion de datos fue hecha correctamente
		header('Location: clientes.php');
	}else {
		# Si resultado fue FALSE la insercion de datos no fue hecha correctamente
		echo "<p>Error</p>";
	}

 ?>