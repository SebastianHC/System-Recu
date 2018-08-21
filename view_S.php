<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--Esto sirve para escalar nuestra pagina web en diferentes dispositivos con diferentes dimesiones-->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scale=no, initial-scale=1, maximum-scale=1,minimum-scale=1">
	<title>CAI | Students DB</title>
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
  <h1 class="display-4">Students Data Base</h1>
  <p class="lead">This is the List of Students of CAI in the Univerity Polytechnic of Victoria.</p>
 
	</div>
<!--Barra menu-->
	<!--<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Down</a>
    </li>
</ul>-->
<!--Barra de Busqueda
<nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
-->
<!--Tabla de datos alumno-->
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">ID Student</th>
      <th scope="col">Name</th>
      <th scope="col">First Surname</th>
      <th scope="col">Second Surname</th>
      <th scope="col">Career</th>
      <th scope="col">Level</th>
      <th scope="col">Group</th>
      <th scope="col">E-mail</th>
      <th scope="col">Phone-Number</th>
      <th scope="col">Report</th>
      <th scope="col">Update Student</th>
      <th scope="col">Remove Student</th>
    </tr>
  </thead>
  <tbody>
  <?php
      include_once 'conexion.php';
      $sentencia = "SELECT * FROM students ORDER BY id ASC";
      foreach ($dbconnection->query($sentencia) as $row) {
          echo "<tr><td>".$row['id']."</td";
          echo "<tr><td>".$row['idStudent_S']."</td";
          echo "<tr><td>".$row['name_S']."</td";
          echo "<tr><td>".$row['surnameF_S']."</td";
          echo "<tr><td>".$row['surnameM_S']."</td";
          echo "<tr><td>".$row['career_S']."</td";
          echo "<tr><td>".$row['level_S']."</td";
          echo "<tr><td>".$row['group_S']."</td";
          echo "<tr><td>".$row['email_S']."</td";
          echo "<tr><td>".$row['phoneNumber_S']."</td";
      }
  ?>
</tbody>
</table>
</body>
</html>