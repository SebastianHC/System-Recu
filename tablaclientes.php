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
       <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Pedidos
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Visualizar</a>
    <a class="dropdown-item" href="#">Registrar</a>
  </div>
</div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="medicamentos.php">Medicamentos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="clientes.php">Clientes</a>
      </li>
    </ul>
  </div>
</nav>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
    </tr>
  </thead>
  <tbody>
   <?php 
        include_once 'conexion.php';
        $sentencia = "SELECT * FROM clientes";
        foreach ($bd->query($sentencia) as $row) {
          # Este ciclo barrera toda la tabla de la bd para mostrar los datos
          # Mostrara los datos registrados en la bd que se registraron
          echo "<tr><td>".$row['id']."</td>";
          echo "<td>".$row['nombre']."</td>";
          echo "<td>".$row['email']."</td>";
          echo "<td>".$row['telefono']."</td>";
          
          echo "<td><a href='actclientes.php?id=".$row['id']."'>Actualizar</a></td>";
          echo "<td><a href='eliminarclientes.php?id=".$row['id']."'>Eliminar</a></td></tr>";
        }
       ?>

    

  </tbody>
</table>