<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Farmacia</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="pedidos.php">Pedidos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="medicamentos.php">Medicamentos</a>
      </li>
      <li class="nav-item">
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Clientes
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="tablaclientes.php">Visualizar</a>
    
  </div>
      </li>
    </ul>
  </div>
</nav>

<div class="container">

	<form method="post" action="registroclientes.php">

	  <div class="form-group">
	    <label for="formGroupExampleInput">Id</label>
	    <input type="text" class="form-control" name="id" placeholder="id">
	  </div>

	  <div class="form-group">
	    <label for="formGroupExampleInput">Nombre</label>
	    <input type="text" class="form-control" name="nombre" placeholder="nombre">
	  </div>

	  <div class="form-group">
	    <label for="formGroupExampleInput">Correo</label>
	    <input type="text" class="form-control" name="correo" placeholder="correo">
	  </div>

	  <div class="form-group">
	    <label for="formGroupExampleInput">Telefono</label>
	    <input type="text" class="form-control" name="telefono" placeholder="telefono">
	  </div>

	  <button type="submit" class="btn btn-primary">Guardar</button>
	</form>
</div>
