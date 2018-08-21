<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--Esto sirve para escalar nuestra pagina web en diferentes dispositivos con diferentes dimesiones-->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scale=no, initial-scale=1, maximum-scale=1,minimum-scale=1">
  <title>CAI | Reg-Students</title>
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
  <h1 class="display-4">Registrations for Students</h1>
  <p class="lead">This is the Form of Registrations for Students of CAI in the Univerity Polytechnic of Victoria.</p>
  </div>  

  <!--List Group--> 
  <div class="container"> 
    <div class="list-group float-right">
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Id </h5>
    </div>
    <p class="mb-1">The "Id" is provided by the university.</p>
    <small>Example: 1730314.</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Group</h5>
    </div>
    <p class="mb-1">The "Group" is provided by the teacher</p>
    <small class="text-muted">Example: xxxx-xxxx.</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Level</h5>
    </div>
    <p class="mb-1">The "Level" is the student's level of knowledge about English.</p>
    <small class="text-muted">Example: xxxx-xxxx.</small>
  </a>
    </div>

  <!--Form-->
    <form action="register_Save_S.php" method="post">
      <div class="form-group col-md-5">
        <label for="username">Id</label>
        <input type="text" class="form-control" name="idStudent_S" placeholder="Id Student">
      </div>

      <div class="form-group col-md-5">
      <label for="nombre">Name</label>
      <input type="text" class="form-control" name="name_S" placeholder="Name">
      </div>

      <div class="form-group col-md-5">
      <label for="lastname">First Surname</label>
      <input type="text" class="form-control" name="surnameF_S" placeholder="First Surname">
      </div>

      <div class="form-group col-md-5">
      <label for="lastname2">Second Surname</label>
      <input type="text" class="form-control" name="surnameM_S" placeholder="Second Surname">
      </div>

      <div class="form-group col-md-5">
      <label for="career">Career</label>
      <select class="custom-select" name="career_S">
        <option selected>Choose...</option>
        <option value="ITI">ITI</option>
        <option value="ITM">ITM</option>
        <option value="IM">IM</option>
        <option value="PYMES">PYMES</option>
        <option value="ISA">ISA</option>
      </select>
      </div>

      <div class="form-group col-md-5">
      <label for="career">Level</label>
      <select class="custom-select" name="level_S">
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
      <label for="grupo">Group</label>
      <input type="text" class="form-control" name="group_S"placeholder="Group">
      </div>


      <div class="form-group col-md-5">
      <label for="groupstu">E-mail</label>
      <input type="email" class="form-control" name="email_S" placeholder="E-mail">
      </div>

      <div class="form-group col-md-5">
      <label for="levelstu">Phone Number</label>
      <input type="text" class="form-control" name="phoneNumber_S" placeholder="Phone Number">
      </div>

  </div>
      <button type="submit" class="btn btn-primary">Save</button>
      <a type="cancel" href="panelSU.php" class="btn btn-primary" >Cancel</a>
    </form>
    <br>
</nav>
<br>
<br>
</body>
</html>