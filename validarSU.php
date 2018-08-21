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
			if(isset($_POST['loginSU'])){
				$usuario = $_POST['username_A'];
                $password = $_POST['password_A'];
                //Hacer Consulta
				$consulta = mysql_query("SELECT * FROM admin WHERE username_A='$usuario' AND password_A='$password'");
                //Si el numero de consultas es mayor a 0
                if (mysql_num_rows($consulta)>0) {
                    //se procedera a crear la sesion
                    //listar los usuarios
                    $row = mysql_fetch_array($consulta);
                    //Crear sesion con variable username_a que es la variable de sesion de bd
					$_SESSION["username_A"] = $row['username_A']; 
				  	echo 'Iniciando sesión para '.$_SESSION['username_A'].' <p>';
					echo '<script> window.location="panelSU.php"; </script>';
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="index.php"; </script>';
				}
			}
		?>	
</body>
</html>