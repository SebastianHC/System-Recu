<?php 

	$conexion = new mysqli('localhost','root','','base_de_datos_cai');

	if($conexion->connect_error){
		die("La conexion ha fallado: ".$conexion->connect_error);
    }
    
    //$validarCampos = "SELECT * FROM teachers WHERE idTeacher_T = '$_POST[idTeacher_T]'";
    
        //  $count = mysqli_num_rows($result);

    //if($count == 1){
        $query = "INSERT INTO teachers (idTeacher_T,password_T,name_T,surnameF_T,surnameM_T,email_T,phoneNumber_T) VALUES ('$_POST[idTeacher_T]','$_POST[password_T]','$_POST[name_T]','$_POST[surnameF_T]','$_POST[surnameM_T]','$_POST[email_T]','$_POST[phoneNumber_T]')";
            if($conexion->query($query)==TRUE){
                echo"<br/>"."<h2>"."Teacher creado."."</h2>";
            }
            else{
                echo"Error al crear TEACHER".$query."<br>".$conexion->error;
            }
      //  }
	//else{
	//	echo"Ingrese todos los campos correspondientes"."<br/>";
	//	echo"<a href='register_T.php'>Regresar</a>";
	//}
?>
