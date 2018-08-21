<?php 
//Hace la conexion con la base de datos
	$user = "root";
	$pass = "";
	//Nombre de la base de datos a enlazar
	$dbName = "bd_recuperacion";
	try {
		$bd = new PDO('mysql:host=localhost;dbname='.$dbName,$user,$pass);
	} catch (Exception $e) {
		echo "Error en la conexion";
		//Marcar linea del error.
		echo "Linea del error". $e->getLine();
	}
 ?>