<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <!-- Importar los estilos de Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="../css/recuperar.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>
 <header>
        <!-- <nav>
            
            
            <div class="nav-wrapper #5c6bc0 indigo lighten-3">
                <div class="container">
                    
                    
                    <a href="login.php" class="brand-logo">Recuperar Contraseña</a>
                    
                </div>
            </div>
        
           
            
        </nav> -->
    </header>

<body>


    <main>
        <div class="container">
            <div> 
                <div class="row">
                <form class="col s12 m6 offset-m3" action="cambiarcontr.php" >
                    <div class="tarjeta_recuperacion">
                        <div class="card-content">
                          <center> <h1> <span class="card-title white-text text-lighten-2"><strong>¿Olvidaste tu Contraseña?</strong></span></H1></center>
                            <div class="row">
                                <div class="input-field col s6 white-text text-lighten-2">
                                    <select>
                                        
                                        <option value="" disabled selected>Selecione su Tipo de documento</option>
                                        <option value="1">Cédula de ciudadanía</option>
                                        <option value="2">Tarjeta de identidad</option>
                                        <option value="3">Cédula de extrangeria</option>
                                        <option value="4">DNI-Documento Nacional de Identificación</option>
                                        <option value="5">Número Ciego SENA</option>
                                        <option value="6">Cedula de extrangeria</option>
                                        <option value="7">Pasaporte</option>
                                        <option value="8">Permiso por Proteccion Temporal</option>
                                    </select>
                                    <label>Tipo de Identificación</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6 white-text">
                                    <input id="numero_identificacion" type="text" class="validate" required>
                                    <label for="numero_identificacion">Número de Identificación</label>
                                </div>
                            </div>
                            
                        </div>
                        <div class="card-action">
                            <button class="btn waves-effect waves-light #ffffff white indigo-text" type="submit" name="action">Recuperar
                                Contraseña
                            </button>
                        </div>
                    </div>
                </form>
         
            </div>
        </div>
    </div>

    </main>

    <!-- Importar los scripts de Materialize y jQuery -->


    <!-- Inicializar los componentes de Materialize -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            M.AutoInit();
        });
    </script>
</body>

</html>