<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver Documento</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css"  media="screen,projection"/>


    <link rel="stylesheet" href="../css/listarRol.css">
</head>
<body>
    <div class="container">
        <div class="row fondoForm">
            <div class="col s12">
                <span class="flow-text center titulo1"><h5>Tipos de Documento</h5></span>
                <div class="row tituloContenedorFiltro">
                    <div class="col s12">
                        <span class="flow-text left titulo1"><h6>Filtrar por:</h6></span>
                    </div>
                </div>
                <div class="row contenedorFiltro">
                    <form method="post">
                        <div class="col s2">
                            <div class="input-field col s12">
                                <select name="opciones">
                                    <option value="Docu_cod">Codigo</option>
                                    <option value="Docu_nom">Nombre</option>
                                </select>  
                            </div>
                        </div>
                        <div class="col s2">
                            <div class="input-field col s12">
                                <input placeholder="Placeholder" id="a" name="condicion" type="text" class="validate inputModificado">
                                <label for="a" class="labelModificado">Tipo Documento</label>
                            </div>
                        </div>
                        <div class="col s2 offset-s6">
                            <button class="btnFormulario">Buscar</button>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col 2 crear">
                        <a class="modal-trigger" href="#modalCrudDocu" onclick="CrearDocu('crear')"><i class="small material-icons green-text text-accent-3">add_circle</i>Crear Tipo de Documento</a>
                    </div>
                </div>
                <?php
                    include("selectDocu.php");
                ?>
            </div>
        </div>
    </div>

    <!----------------- inicio Modal del CRUD ---------------------------------------->
    <div id="modalCrudDocu" class="modal modal-fixed-footer">
        <div class="modal-content">
            <!--Contenido-->
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat"><i class="material-icons">close</i></a>
        </div>
    </div>
    <!----------------- final Modal del CRUD ---------------------------------------->




            <div class="fixed-action-btn">
                <a class="btn-floating btn-large red ">
                    <i class="large material-icons ">mode_edit</i>
                </a>
                <ul>
                    <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
                    <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
                    <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                    <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
                </ul>
            </div>
    <script>

    </script>

    <!-----------------Conexiones con archivos de JavaScript----------------------------->
    <script src="../JS/scriptDocu.js"></script>
    <script src="../JS/jquery-3.7.1.js"></script>
    <script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
    <!-- <script type="text/javascript" src="../materialize/js/materialize.js"></script> -->
    <script type="text/javascript" src="../JS/scriptMaterialize.js"></script>
</body>
</html>