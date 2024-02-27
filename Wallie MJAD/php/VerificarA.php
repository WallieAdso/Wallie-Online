<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar articulos</title>
    <link rel="stylesheet" href="../css/verificarArticulos.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.css" media="screen,projection"/>
</head>
<body>
    <div class="container tarjArticulos">
<!---SELECTOR ---------------------------------------------------------------->
        <div class="row selector">
            <div class="input-field col s5">
            <label class="black-text">Tipo elemento</label><br></br>
                <select>
                    <option value="1">Computadores</option>
                    <option value="2">Mesas</option>
                    <option value="3">Sillas</option>
                </select>

            </div>
        </div>
<!---CABECERA TABLA---------------------------------------------------------------->
        <div class="row filaTitulos">
            <div class="col s3"><span class="flow-text">Serial</span></div>
            <div class="col s3 izquierda"><span class="flow-text">Estado</span></div>
            <div class="col s5 derecha"><span class="flow-text">Seleccionar todo</span></div>
            <div class="col s1 centro"><span class="flow-text">
                <button class="check"><i class="tiny material-icons white-text"></i></button>
            </span></div>
        </div>
<!---CONTENIDO TABLA ---------------------------------------------------------------->
        <div class="row filaSubtitulos">
            <div class="col s3"><span class="flow-text">2721</span></div>
            <div class="col s3"><span class="flow-text"><i class="material-icons tiny green-text">brightness_1</i>Activo</span></div>
            <div class="col s5 derecha"><span class="flow-text">
                <button class="transparent"><img src="img/expediente.png" alt=""></button>
                <button class="transparent"><img src="img/boton-editar.png" alt=""></button>
            </span></div>
            <div class="col s1 centro"><span class="flow-text"><button class="check"><i class="tiny material-icons white-text"></i></button>
        </span></div>
        </div>
        <div class="row filaSubtitulos">
            <div class="col s3"><span class="flow-text">2721</span></div>
            <div class="col s3"><span class="flow-text"><i class="material-icons tiny red-text">brightness_1</i>Reparacion</span></div>
            <div class="col s5 derecha"><span class="flow-text"><button class="transparent">
                <button class="transparent"><img src="img/expediente.png" alt=""></button>
                <button class="transparent"><img src="img/boton-editar.png" alt=""></button>
            </span></div>
            <div class="col s1 centro"><span class="flow-text">
            <button class="check"><i class="tiny material-icons white-text"></i></button>
            </span></div>
            </div>
        <div class="row filaSubtitulos">
            <div class="col s3"><span class="flow-text">2721</span></div>
            <div class="col s3"><span class="flow-text"><i class="material-icons tiny green-text">brightness_1</i>Activo</span></div>
            <div class="col s5 derecha"><span class="flow-text"><button class="transparent">
                <button class="transparent"><img src="img/expediente.png" alt=""></button>
                <button class="transparent"><img src="img/boton-editar.png" alt=""></button>
            </span></div>
            <div class="col s1 centro"><span class="flow-text">
            <button class="check"><i class="tiny material-icons white-text"></i></button>
            </span></div>
            </div>
        <div class="row filaSubtitulos">
            <div class="col s3"><span class="flow-text">2721</span></div>
            <div class="col s3"><span class="flow-text"><i class="material-icons tiny green-text">brightness_1</i>Activo</span></div>
            <div class="col s5 derecha"><span class="flow-text"><button class="transparent">
                <button class="transparent"><img src="img/expediente.png" alt=""></button>
                <button class="transparent"><img src="img/boton-editar.png" alt=""></button>
            </span></div>
            <div class="col s1 centro"><span class="flow-text">
            <button class="check"><i class="tiny material-icons white-text"></i></button>
            </span></div>
            </div>
        <div class="row filaSubtitulos">
            <div class="col s3"><span class="flow-text">2721</span></div>
            <div class="col s3"><span class="flow-text"><i class="material-icons tiny green-text">brightness_1</i>Activo</span></div>
            <div class="col s5 derecha"><span class="flow-text"><button class="transparent">
                <button class="transparent"><img src="img/expediente.png" alt=""></button>
                <button class="transparent"><img src="img/boton-editar.png" alt=""></button>
            </span></div>
            <div class="col s1 centro"><span class="flow-text">
            <button class="check"><i class="tiny material-icons white-text"></i></button>
            </span></div>
            </div>
        <div class="row filaSubtitulos">
            <div class="col s3"><span class="flow-text">2721</span></div>
            <div class="col s3"><span class="flow-text"><i class="material-icons tiny green-text">brightness_1</i>Activo</span></div>
            <div class="col s5 derecha"><span class="flow-text"><button class="transparent">
                <button class="transparent"><img src="img/expediente.png" alt=""></button>
                <button class="transparent"><img src="img/boton-editar.png" alt=""></button>
            </span></div>
            <div class="col s1 centro"><span class="flow-text">
            <button class="check"><i class="tiny material-icons white-text"></i></button>
            </span></div>
        </div>
        <button class="btnPrincipal">Generar</button>
    </div>
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
</body>
</html>