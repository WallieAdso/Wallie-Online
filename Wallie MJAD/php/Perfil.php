<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Agrega estos enlaces en la sección head de tu HTML -->
    <link rel="stylesheet" href="../css/perfil.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>Perfil</title>
</head>
<header>
<div id="Ubicacion">
            <img id="Casita" src="../img/Icono_Home.png" width="15%">
            <label id="A">Bitacora</label>
        </div>
</header>
<body>
  <div class="padre">
    <div class="usuario">
      <h4>PERFIL</h4>
      <div>
        <img class="img" src="../img/perfil.png" alt="">
        <p>Edwin Sanchez</p>
        <p>Instructor</p>
        <p>Online</p>
        <div class="iconos">
          <a href="Perfil.php" class="btn-floating red"><i class="material-icons">directions_run</i></a>
          <a href="Perfil.php" class="btn-floating blue"><i class="material-icons">new_releases</i></a>
        </div>
        
      </div>
    </div>
    <div class="datos">
      <h4>INFORMACIÓN PERSONAL</h4>
      <form action="">
        <!------------- Division de formulario---------------------------------- -->
        <div class="formulario">
          <div>
            <p>Id</p>
            <input type="text" placeholder="123333333213" disabled>
          </div>
          <div>
            <p>Tipo documento</p>
            <input type="text" placeholder="Cedula Ciudadana" disabled>
          </div>
        </div>
        <!------------- Division de formulario---------------------------------- -->
        <div class="formulario">
          <div>
            <p>No contrato</p>
            <input type="text" placeholder="752452n42" disabled>
          </div>
          <div>
            <p>Correo</p>
            <input type="text" placeholder="pepito@gmail.com" disabled>
          </div>
        </div>
        <!------------- Division de formulario---------------------------------- -->
        <div class="formulario">
          <div>
            <p>Telefono</p>
            <input type="text" placeholder="413145324321" disabled>
          </div>
          <div>
            <p>Rol</p>
            <input type="text" placeholder="Administrador" disabled>
          </div>
        </div>
        <input type="submit" value ="Actualizar">
      </form>
    </div>
  </div>
      <!--------------------------------------------barra de navegación------------------------------------------------->
      <footer>
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large blue darken-4">
              <i class="large material-icons">menu</i>
            </a>
            <ul class="navbar">
              <li><a href="Perfil.php" class="btn-floating red"><i class="material-icons">assignment_ind</i></a></li>
              <li><a href="Novedad.php"  class="btn-floating yellow darken-1"><i class="material-icons">assignment_late</i></a></li>
              <li><a href="Bitacora.php" class="btn-floating green"><i class="material-icons">book</i></a></li>
              <li><a href="Principal.php" class="btn-floating blue"><i class="material-icons">insert_emoticon</i></a></li>

              
            </ul>
        </div>
     </footer>
    <!-- Importar los scripts de Materialize y jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- script de la barra de navegación -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
          var elems = document.querySelectorAll('.fixed-action-btn');
          var instances = M.FloatingActionButton.init(elems, {
            direction: 'left',
            hoverEnabled: false
          });
        });
    </script>
  
</body>
</html>