<?php 

	$conexion = new mysqli('localhost','root','','base_de_datos_cai');

	if($conexion->connect_error){
		die("La conexion ha fallado: ".$conexion->connect_error);
	}

	$buscarTeacher = "SELECT * FROM teachers WHERE idTeacher_T = '$_POST[idteacher]'";

	$result = $conexion->query($buscarTeacher);
	$count = mysqli_num_rows($result);

	if($count == 1){
		$query = "INSERT INTO groups (name_G,level_G,teacherId_G) VALUES ('$_POST[name_G]','$_POST[level_G]','$_POST[idteacher]')";
		if($conexion->query($query)==TRUE){
			echo"<br/>"."<h2>"."Grupo creado."."</h2>";
		}
		else{
			echo"Error al crear grupo".$query."<br>".$conexion->error;
		}
	}
	else{
		echo"No existe el ID del profesor"."<br/>";
		echo"<a href='register_G.php'>Ingrese un ID correcto</a>";
	}

?>
