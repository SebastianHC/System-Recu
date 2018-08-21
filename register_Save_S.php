<?php 

	$conexion = new mysqli('localhost','root','','base_de_datos_cai');

	if($conexion->connect_error){
		die("La conexion ha fallado: ".$conexion->connect_error);
    }

   // $validarCampos = "SELECT * FROM students WHERE idStudent_S = '$_POST[idStudent_S]'";
    
     //   $result = $conexion->query($validarCampos);
       // $count = mysqli_num_rows($result);

        //if($count == 1){
        $query = "INSERT INTO students (idStudent_S,name_S,surnameF_S,surnameM_S,career_S,level_S,group_S,email_S,phoneNumber_S) VALUES ('$_POST[idStudent_S]','$_POST[name_S]','$_POST[surnameF_S]','$_POST[surnameM_S]','$_POST[career_S]','$_POST[level_S]','$_POST[group_S]','$_POST[email_S]',NULL)";
            if($conexion->query($query)==TRUE){
                echo"<br/>"."<h2>"."Students creado."."</h2>";
            }
            else{
                echo"Error al crear STUDENT".$query."<br>".$conexion->error;
            }
        //}
        //else{
            //    echo"Ingrese todos los campos correspondientes"."<br/>";
          //      echo"<a href='register_S.php'>Regresar</a>";
            //}
?>
