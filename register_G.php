<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--Esto sirve para escalar nuestra pagina web en diferentes dispositivos con diferentes dimesiones-->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scale=no, initial-scale=1, maximum-scale=1,minimum-scale=1">
  <title>CAI | Reg-Groups</title>
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
      <a class="navbar-brand text-warning" href="index.php">CAI</a>
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
  
  <!--AQUI ES DONDE SE EMPIEZA-->

  <!--Titulo-->
  <div class="jumbotron text-center">
  <h1 class="display-4">Registrations for Groups</h1>
  <p class="lead">This is the Form of Registrations for Groups of CAI in the Univerity Polytechnic of Victoria.</p>
  </div>  

  <!--List Group-->
<div class="container"> 
<div class="list-group float-right">
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Id </h5>
    </div>
    <p class="mb-1">The "Id" is created for the people in charge.</p>
    <small>Example: xxxxxx.</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Teacher</h5>
    </div>
    <p class="mb-1">The "Teacher Id" is the Id of the teacher in charge of the course of English.</p>
    <small class="text-muted">Example: 1730314.</small>
  </a>
</div>

  <!--Form-->
<form action="register_Save_G.php" method="post">

    <div class="form-group col-md-5">
      <label for="namegroup">Name</label>
      <input type="text" class="form-control" name="name_G" placeholder="Name">
    </div>

    <div class="form-group col-md-5">
      <label for="career">Level</label>
      <select class="custom-select" name="level_G">
        <option selected>Choose...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
      </select>
    </div>

    <div class="form-group col-md-5">
      <label for="teachgroup">Teacher ID</label>
      <input type="text" class="form-control" name="idteacher" placeholder="Teacher">
    </div>
</div>

  <button type="submit" name="saveG"class="btn btn-primary">Save</button>
  <a type="cancel" href="panelSU.php" class="btn btn-primary" >Cancel</a>
</form>
</body>
</html>