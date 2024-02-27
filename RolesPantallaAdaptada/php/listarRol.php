<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver roles</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css"  media="screen,projection"/>


    <link rel="stylesheet" href="../css/listarRol.css">
</head>
<body>
    <div class="container">
        <div class="fondoForm">
            <div class="col s12">
                <span class="center titulo1"><h5>Listar roles</h5></span>
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
                                    <option value="rol_cod">Codigo</option>
                                    <option value="rol_nom">Nombre</option>
                                </select>  
                            </div>
                        </div>
                        <div class="col s2">
                            <div class="input-field col s12">
                                <input placeholder="Placeholder" id="a" name="condicion" type="text" class="validate inputModificado">
                                <label for="a" class="labelModificado">Id rol</label>
                            </div>
                        </div>
                        <div class="col s2 offset-s6">
                            <button class="btnFormulario">Buscar</button>
                        </div>
                    </form>
                </div>
                <div>
                    <div class="col 2 crear">
                        <a class="modal-trigger" href="#modalCrudRol" onclick="crearRol('crear')"><i class="small material-icons green-text text-accent-3">add_circle</i>Crear rol</a>
                    </div>
                </div>
                <table class="highlight tabla">
                    <thead>
                        <tr>
                            <th class="center">Codigo</th>
                            <th class="center"></th>
                            <th class="center">Nombre</th>
                            <th class="center"></th>
                            <th class="center">Acciones</th>
                        </tr>
                    </thead>
                </table>
                <div class="lista">
                    <?php
                        include("selectRol.php");
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!----------------- inicio Modal del CRUD ---------------------------------------->
    <div id="modalCrudRol" class="modal modal-fixed-footer">
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
    <script src="../JS/scriptRoles.js"></script>
    <script src="../JS/jquery-3.7.1.js"></script>
    <script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
    <!-- <script type="text/javascript" src="../materialize/js/materialize.js"></script> -->
    <script type="text/javascript" src="../JS/scriptMaterialize.js"></script>
</body>
</html>