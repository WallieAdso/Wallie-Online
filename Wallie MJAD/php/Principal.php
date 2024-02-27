<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/Styles_PPrinc.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <title>Pagina Pricipal</title>
    </head>
    <body>
        <header>
            <div id="Ubicacion">
                <img id="Casita" src="../img/Icono_Home.png">
                <label id="A">INICIO</label>
            </div>
        </header>
        <div class="nomUsuario">
            <p>Bienvenido Juan Torres</p>
        </div>
        <div class="contenedorPadre">
            <div class="contWallie">
                <img src="../img/L2V2.png">
            </div>
            <div class="contAmbientes">
                <div class="tituloAmb">
                    <p>Ambientes asignados</p>
                </div>
                <div class="ambientes">
                    <?php
                        $suma=0;
                        for ($i=0; $i < 4; $i++) { 
                            $suma += $i;
                    ?>
                        <div class="salones">
                            <p>A20<?php echo $suma;?></p>
                            <form action="#" method="post">
                                <input type="submit" value="Entrar" name="Entrar">
                            </form>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
    <footer class="mi-footer">
        
            <div id="Nav1" class="contenedor-navbar">
                <lu class="tooltipped" data-position="top" data-tooltip="Registrar elemento"><a href="registrar.php"><img src="../img/Icono_BD.png" width="33%" ></a></lu>
                <lu class="tooltipped" data-position="top" data-tooltip="Bitacora"><a href="bitacora.php"><img src="../img/Icono_Aulas.png" width="33%" ></a></lu>
                <lu class="tooltipped" data-position="top" data-tooltip="Novedad"><a href=""></a><a href="Registrar.php"><img src="../img/Icono_Reportar.png" width="33%" ></a></lu>
                <lu class="tooltipped" data-position="top" data-tooltip="Mi perfil"><a  href="Perfil.php"><img src="../img/Icono_Usuario.png" width="33%" ></a></lu>
                <lu><a class="tooltipped" data-position="top" data-tooltip="Cerrar sesión" href="Login.php" ><img src="../img/Icono_Power.png" width="60%" ></a></lu>
<!-- Estructura de la modal -->

<!--------------Modal del perfil---------->
<!-- <div id="miModal" class="modal">
  <div class="modal-content">
    <h4>perfil</h4>
    <p>aqui va el perfil del usuario</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
  </div>
</div> -->

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


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="./js/materialize.js"></script>
    <script>
          document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
        
    </script>

    </div>

</div>
            </div>
    </footer>
</html>