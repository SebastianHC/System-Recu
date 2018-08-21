<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--Esto sirve para escalar nuestra pagina web en diferentes dispositivos con diferentes dimesiones-->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scale=no, initial-scale=1, maximum-scale=1,minimum-scale=1">
	<title>CAI | Groups DB</title>
	<!--Agregamos los archivos css de bootstrap-->
	<link rel="stylesheet" href="css/bootstrap.min.css" id="bootstrap-css">
	<!--Agregamos los archivos js de bootstrap-->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--Estilo css personalizado-->
	<link rel="stylesheet" href="css/signin.css">
</head>
<!--Inicia el cuerpo de nuestro index-->
<!--Navbar-->
<body class="text-center">
<nav class="navbar navbar-expand-lg navbar-light"style="background-color: #663399;">
<a class="navbar-brand text-warning" href="panelSU.php">CAI</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link text-warning" href="logoutSU.php">Log out</a>
                </li>
          </ul>
        </div>
  </nav>

</nav>
	
	<!--AQUI ES DONDE SE EMPIEZA-->
<!--Titulo-->
	<div class="jumbotron">
  <h1 class="display-4">Groups Data Base</h1>
  <p class="lead">This is the List of Groups of CAI in the Univerity Polytechnic of Victoria.</p>
	</div>

<!--Tabla de datos alumno-->
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Group Name</th>
      <th scope="col">Level</th>
      <th scope="col">Teacher ID</th>
      <th scope="col">Update Group</th>
      <th scope="col">Remove Group</th>
    </tr>
  </thead>
  <tbody>
    <?php
    	include_once 'conexion.php';
        $sentencia = "SELECT * FROM groups ORDER BY id ASC";
    	foreach ($dbconnection->query($sentencia) as $row) {
    		echo "<tr><td>".$row['id']."</td";
            echo "<tr><td>".$row['name_G']."</td";
            echo "<tr><td>".$row['level_G']."</td";
            echo "<tr><td>".$row['teacherId_G']."</td";
    	}
    ?>
  </tbody>
</table>
</body>
</html>