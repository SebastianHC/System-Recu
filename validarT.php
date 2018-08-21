<?php
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
<head>
	<title>Validando...</title>
	<meta charset="utf-8">
</head>
</head>
<body>
		<?php
			include 'dbconnect.php';
			if(isset($_POST['loginT'])){
				$usuarioT = $_POST['idTeacher_T'];
                $passwordT = $_POST['password_T'];
                //Hacer Consulta
				$consultaT = mysql_query("SELECT * FROM teachers WHERE idTeacher_T='$usuarioT' AND password_T='$passwordT'");
                //Si el numero de consultas es mayor a 0
                if (mysql_num_rows($consultaT)>0) {
                    //se procedera a crear la sesion
                    //listar los usuarios
                    $rowT = mysql_fetch_array($consultaT);
                    //Crear sesion con variable idTeacher_T que es la variable de sesion de bd
					$_SESSION["idTeacher_T"] = $rowT['idTeacher_T']; 
				  	echo 'Iniciando sesión para '.$_SESSION['idTeacher_T'].' <p>';
					echo '<script> window.location="panelT.php"; </script>';
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="indexT.php"; </script>';
				}
			}
		?>	
</body>
</html>