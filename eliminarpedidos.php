<?php 
	include_once 'conexion.php';
	$id = $_GET['id'];
	$sentencia = $bd -> prepare("DELETE FROM pedido WHERE id = ?");
	$resultado = $sentencia -> execute([$id]);
	if ($resultado) {
		# si se elimino correctamente
		header('Location: tablapedidos.php');
	}
 ?>
 <button type="submit" class="btn btn-primary">Actualizar</button></td>