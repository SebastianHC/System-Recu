<?php 
	include_once 'conexion.php';
$Id= $_GET['Id'];
$Name = $_POST['Name'];
$FirstSurname = $_POST['FirstSurname'];
$SecondSurname = $_POST['SecondSurname'];
$Career = $_POST['Career'];
$Level = $_POST['Level'];
$Group = $_POST['Group'];
$Email = $_POST['Email'];
$PhoneNumber = $_POST['PhoneNumber'];

$buscarGrupo = "SELECT * FROM grupos WHERE nombreGrupo = '$_POST[grupo]' ";

if($buscarGrupo){
	$sentencia = $bd -> prepare("UPDATE alumnos SET nombre = '$nombre', apellidoP = '$apellidoP', apellidoM = '$apellidoM', carrera = '$carrera', nivel = '$nivel', grupo = '$grupo', correo = '$correo', telefono = '$telefono' WHERE matricula = '$matricula'");
	$resultado = $sentencia -> execute([$matricula,$nombre,$apellidoP,$apellidoM,$carrera,$nivel,$grupo,$correo,$telefono]);

	if ($resultado) {
		# Condiciona el resultado:
		# Si el resultado me devolvio un TRUE quiere decir que la insercion de datos fue hecha correctamente
		header('Location: view_S.php');
	}else {
		# Si resultado fue FALSE la insercion de datos no fue hecha correctamente
		echo "<p>Error</p>";
	}
}
else{
	echo "<br />". "The group doesn't exists." . "<br />";
	echo "<a href='actualizarA.php'>Please aggregate an existing group</a>";
}
 ?>