<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Tipo de Documento</title>
    <link rel="stylesheet" href="../css/crearRol.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> <!-- materialize css -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!--iconos -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
    <div class="row">
        <span class="flow-text center titulo2"><h5>Crear Documento</h5></span>
        <div class="container contenedorCrear">
            <form class="col s6 offset-s3" action="../Controller/controllerDocumento.php" method="POST">
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="codigo" type="text" class="inputModificado" name="Docu_cod">
                        <label for="" class="labelModificado">Codigo de Documento</label>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="Nombre" type="text" class="inputModificado" name="Docu_nom">
                        <label for="" class="labelModificado">Nombre del Tipo de Documento</label>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="descripcion" type="text" class="inputModificado" name="Docu_des">
                        <label for="" class="labelModificado">Descripcion del Tipo de Documento</label>
                    </div>
                    <div class="col s12">
                        <input type="hidden"  name="tabla_nom" value="documento">
                        <input type="submit" class="btnFormulario" name="registrar" value="Registrar">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
