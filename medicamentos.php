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
        <div class="dropdown">
 	 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    	Medicamentos
 	 </button>
 	 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
   	 <a class="dropdown-item" href="tablamedicamentos.php">Visualizar</a>
    	
  </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="clientes.php">Clientes</a>
      </li>
    </ul>
  </div>
</nav>


<div class="container">

	<form method="post" action="registromedicamentos.php">

	  <div class="form-group">
	    <label for="formGroupExampleInput">Id</label>
	    <input type="text" class="form-control" name="id" placeholder="id">
	  </div>

	  <div class="form-group">
	    <label for="formGroupExampleInput2">Producto</label>
	    <select class="custom-select" name="descripcion">
		    <option selected>Producto...</option>
		    <option value="1">Paracetamol</option>
		    <option value="2">Peptobismol</option>
		    <option value="3">Ibuprofeno</option>
	  	</select>
	  </div>

	  <div class="form-group">
	    <label for="formGroupExampleInput">Cantidad</label>
	    <input type="text" class="form-control" name="cantidad" placeholder="cantidad">
	  </div>

	  <button submit="button" class="btn btn-primary">Guardar</button>
	</form>
</div>
