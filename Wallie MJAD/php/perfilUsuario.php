<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="../css/perfilUsuario.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> <!-- materialize css -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!--iconos -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
<!-- contenedor de todo -->
    <div class="container">


        <div class="row contenedorPrincipal">
            <div class="col s3 offset-s1 fondoForm contenedorIzquierdo">
                <!-- Grey navigation panel -->
                <div class="row">
                    <div class="col s12 titulo">
                        <span class="flow-text">Perfil</span>
                    </div>
                </div>
                <div class="row contenedorImg">
                    <div class="col s8 offset-s2 titulo">
                        <img src="../img/imagenperfil.png" alt="Imagen del perfil" width="100%" height="100%">
                    </div>
                </div>
                <div class="row  contenedorInfo">
                    <div class="col s12 titulo">
                        <span class="flow-text"><h6>Sebastian Sepulveda</h6></span>
                        <span class="flow-text"><h6>Administrador</h6></span>
                        <span class="flow-text"><h6><i class="tiny material-icons green-text">brightness_1</i> En linea</h6></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 contenedorOpciones">
                        <p class="opcionesPerfil">Cambiar contraseña</p>
                        <p class="opcionesPerfil">Otra opcion</p>
                        <p class="opcionesPerfil">Otra opcion</p>
                    </div>
                </div>
                <div class="row contenedorIconos">
                    <div class="col s4 alineacionIzquierda">
                        <a class="btn tooltipped transparent" data-position="top" data-tooltip="Cerrar sesion"><i class="material-icons white-text">exit_to_app</i></a>
                    </div>
                    <div class="col s4 alineacionCentral">
                        <a class="btn tooltipped transparent" data-position="top" data-tooltip="Notificaciones"><i class="material-icons white-text">notifications</i></a>
                    </div>
                    <div class="col s4 alineacionDerecha">
                        <a class="btn tooltipped transparent" data-position="top" data-tooltip="Ajustes"><i class="material-icons white-text">settings</i></a>
                    </div>
                </div>
            </div>
            <div class="col s7 fondoForm">
                <!-- teal navigation panel -->
                <div class="row">
                    <div class="col s12 titulo">  
                        <span class="flow-text">Informacion personal</span>
                    </div>
                </div>

                <div class="row">
                    <form class="col s6">
                        <div class="row">
                                <div class="input-field col s11 offset-s1">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input disabled value="I am not editable" id="disabled" type="text" class="validate inputModificado">
                                            <label for="disabled" class="labelModificado">Nombres</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input disabled value="I am not editable" id="disabled" type="text" class="validate inputModificado">
                                            <label for="disabled" class="labelModificado">Apellidos</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input placeholder="Placeholder" id="telefono" type="text" class="validate inputModificado">
                                            <label for="telefono" class="labelModificado">Telefono</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input disabled value="I am not editable" id="disabled" type="text" class="validate inputModificado">
                                            <label for="disabled" class="labelModificado">Numero de contrato</label>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </form>
                        
                    <div class="col s6 subtitulo">  
                        <span class="flow-text titulo"><h6>Foto de perfil</h6></span>
                        <div class="row">
                            <div class="col s6 offset-s3">
                                <img src="../img/imagenperfil.png" alt="Imagen del perfil" width="100%" height="100%">
                                <input type="file">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s4 offset-s4">
                        <button class="btnFormulario">Actualizar datos</button>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.tooltipped');
            var instances = M.Tooltip.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function(){
            $('.tooltipped').tooltip();
        });
    </script>
</body>
</html>