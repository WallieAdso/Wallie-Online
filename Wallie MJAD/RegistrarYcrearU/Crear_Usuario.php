<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/materialize.css" media="screen,projection"/>
    <link rel="stylesheet" href="../css/Style_crearUsuario.css">
    <script type="text/javascript" src="../js/materialize.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Crear Usuario</title>
</head>
<body>
    <p id="Wallie">Wallie</p>
    <div id="A1">
        <h3>Nuevo Usuario</h3>
        <form action="" method="post">
            <div id="A2">
                <div class="input-field">
                    <label>Tipo de documento</label><br>
                    <select name="NUtipo" placeholder="Tipo de doc">
                        <option value="0"></option>
                        <option value="1">CC</option>
                        <option value="2">TI</option>
                    </select>
                </div>
                <div class="input-field">
                    <label for="first_name">Seleccione el rol del usuario</label><br>
                    <select name="NUrol">
                        <option value="0"></option>
                        <option value="1">Cordinación</option>
                        <option value="2">Apoyo admin.</option>
                        <option value="3">Instructor</option>
                        <option value="4">Vocero</option>
                    </select>   
                </div>
                <div class="input-field">
                    <label for="first_name labels">Numero de documento</label>
                    <input name="NUdocumento" type="text" id="first_name" class="validate">
                </div>
                <div class="input-field">
                    <label for="first_name">Nombre</label>
                    <input name="NUnusuario" type="text" id="first_name" class="validate">    
                </div>
                <div class="input-field">
                    <label for="first_name">Apellido</label>
                    <input name="NUausuario" type="text" id="first_name" class="validate">    
                </div>
                <div class="input-field">
                    <label for="first_name">Correo</label>
                    <input name="NUEmail" type="Email" id="first_name" class="validate">    
                </div>
                <div class="input-field">
                    <label for="first_name">Contraseña</label>
                    <input name="NUcontraseña" type="text" id="first_name" class="validate">    
                </div>
                <div class="input-field">
                    <label for="first_name">Confirme la contraseña</label>
                    <input name="NUccontraseña" type="text" id="first_name" class="validate">    
                </div>
            </div>
            <button class="waves-effect waves-light btn-large white black-text" id="BTNNU" type="submit" value="Crear" href="">Crear</button>
        </form>
    </div>
    <img src="../img/L-InSe.png" id="IW">
    <script>
        $(document).ready(function(){
            $('select').formSelect();
        });
    </script>
</body>
</html>