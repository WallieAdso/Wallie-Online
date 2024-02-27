<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style_TipoElemento.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <title>Tipos de Elemento</title>
</head>
<header>
<div id="Ubicacion">
            <img id="Casita" src="../img/Icono_Home.png" width="15%">
            <label id="A">Tipos de Elemento</label>
        </div>
</header>
<body>
    <Section>

        <div class="contenedor_superior">
          <!-- opciones---- -->
          <div class="opciones">
            <form action="" method="get">
              <!-- buscar---- -->
              <div class="input">
                <label>Buscar Tipo de Elemento</label>
                <input type="text" placeholder="Id" name="id">
              </div>

              <div class="input">
                <input type="submit" value="Registrar Tipo" name="tipo_elemt">
              </div>
            </form>
          </div>
          <hr>
          <!-- Titulos----- -->
          <div class="titulos">
            <p>ID</p>
            <p>Nombre</p>
            <p>Abreviado</p>
            <p>Opciones</p>
          </div>
        </div>
        <?php
         for ($i=0; $i < 5; $i++) { 
        ?>
          <!-- -------------Listado de usuarios------------- -->
          <div class="listado">
             <!-- documento--- -->
             <div class="cod_tipoElemt">
               <p>00023</p>
             </div>
             <!-- Nombres----- -->
             <div class="nombre">
               <p>Portátil</p>
             </div>
             <!-- Categoría-- -->
             <div class="categoria">
               <p>Electrónico</p>
             </div>
             <!-- opciones---- -->
             <div class="contenedor_opciones">
               <a href="#modal1" class="btn-floating blue modal-trigger"><i class="material-icons">visibility</i></a>
               <a href="#modal2" class="btn-floating green modal-trigger"><i class="material-icons">assignment</i></a>
               <a href="#modal3" class="btn-floating red modal-trigger"><i class="material-icons">remove_circle</i></a>
             </div>
          </div>
        <?php
         }
        ?>
        <!-- ---------Script tooltip---------------- -->
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.tooltipped');
            var instances = M.Tooltip.init(elems);
          });
        </script>
        <!-- ---------Script modal---------------- -->
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems);
          });
        </script>
        <!-- ----------Modal ver detalle del tipo de elemento---------- -->
        <div id="modal1" class="modal">
          <div class="modal-content">
            <h4>Detalles del Tipo de Elemento</h4>
            <p>en desarrollo</p>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Volver</a>
          </div>
        </div>
        <!-- ----------Modal De Editar tipo de elemento---------- -->
        <div id="modal2" class="modal">
          <div class="modal-content">
            <h4>Modificar Tipo de Elemento</h4>
            <p>En desarrollo</p>
          </div>
          <div class="modal-footer">
            <button class="waves-effect waves-green btn-flat">Modificar</button>
            <a href="#!" class="modal-close waves-effect waves-red btn-flat">Cerrar</a>
          </div>
        </div>
        <!-- ----------Modal De Eliminar tipo de elemento---------- -->
        <div id="modal3" class="modal">
          <div class="modal-content">
            <h4>Eliminar Tipo de Elemento</h4>
            <p>¿Estas seguro que deseas eliminar el tipo de elemento "Computador"?</p>
          </div>
          <div class="modal-footer">
            <button class="waves-effect waves-red btn-flat">Eliminar</button>
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
          </div>
        </div>
    </Section>
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

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
  });
</script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="./js/materialize.js"></script>
</body>
</html>