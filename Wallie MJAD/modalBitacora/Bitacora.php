<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleBitacora.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <title>Bitacora</title>
</head>
<header>
<div id="Ubicacion">
            <img id="Casita" src="../img/Icono_Home.png" width="15%">
            <label id="A">Bitacora</label>
        </div>
</header>
<body>
    <Section>
        <div class="contenedor_padre">
            <div class="titulos">
                <p>Dispositivo</p>
                <p>Descripción</p>
                <p>Validación</p>
            </div>
            <!-- ----------------------informacion de bitacora quemado :D---------------------------------------- -->
            <?php
                $i=0;
                for ($i=0; $i < 6; $i++) { 
            ?>
                <div class="descripcion_bitacora">
                    <div class="descripcion_icono"><i class="small material-icons">desktop_mac</i></div>
                    <div class="descripcion_info">
                        <p>Cantidad: 30 computadores</p>
                        <a class="modal-trigger" href="#miModal">Mas info</a>
                    </div>
                    <div class="descripcion_validacion">
                            <button class="confirmacion"><i class="tiny material-icons">check</i></button>
                            <button class="negacion"><i class="tiny material-icons">close</i></button>
                    </div>
                </div>
            <?php
                }
            ?>
            <!-- ----------------------informacion de bitacora quemado :D---------------------------------------- -->
            <div>
                <form action="" method="post">
                    <input class="enviar" type="submit" value="Confirmar">
                </form>
            </div>
        </div>
        <!---------------------------------Modal de reportar elemento------------------------->
        <div id="miModal" class="modal">
          <div class="modal-content">
            <h4>Reportar Elemento</h4>
          </div>
          <div class="busqueda">
             <div>
                 <p>Buscar</p>
             </div>
             <div>
                 <form action="#">
                     <input type="search" placeholder="Buscar Elemento" name="buscar" id="">
                     <input type="submit" value="Buscar" name ="buscar">
                 </form>
             </div>
          </div>
          <div class="descripciones">
             <div class="desc1"><P>Checkear</P></div>
             <div class="desc2"><P>Serial</P></div>
             <div class="desc3"><P>Estado</P></div>
             <div class="desc4"><P>Opciones</P></div>
          </div>
            <?php
                for ($i=0; $i < 6; $i++) {
            ?>
                <div class="elementos">
                    <div class="check">
                        <form action="">
                        <label>
                          <input type="checkbox" class="filled-in"/>
                          <span></span>
                        </label>
                    </div>
                    <div class="opciones">
                        <div class="serial"><p>200<?php echo $i;?></p></div>
                        <div class="estado"><p>activo</p></div>
                        <div class="historial"><a href="#" class="btn-floating blue"><i class="material-icons">book</i></a></div>
                        <div class="reportar"><a href="#" class="btn-floating red"><i class="material-icons">assignment_late</i></a></div>
                    </div>
                </div>
            <?php
                }
            ?>
            <div class="enviarCheck">
                <input type="submit" value="Confirmar">
                </form>
            </div>
          <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Volver</a>
          </div>
        </div>

        <script>
          document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.tooltipped');
            var instances = M.Tooltip.init(elems);
          });
        </script>
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems);
          });
        </script>
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