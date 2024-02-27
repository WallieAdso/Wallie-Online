<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Contraseña</title>
    <!-- Importar los estilos de Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" type="text/css" href="../css/recuperar.css">
    
 
</head>
<body>
    
<main>
        <div class="container">
            <div class="row">
                <form class="col s12 m6 offset-m3">
                    <div class="tarjeta_recuperacion">
                        <div class="card-content">
                            <span class="card-title indigo-text text-lighten-2">Nueva contraseña</span>
                            <div class="row">
                                <div class="input-field col s12 inputs">
                                    <input id="campo1" type="text" class="validate" required>
                                    <label for="campo1">Escriba la nueva contraseña</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="campo2" type="text" class="validate" required>
                                    <label for="campo2">ingrese de nuevo la nueva contraseña</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn waves-effect waves-light white indigo-text" type="submit" name="action">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- Importar los scripts de Materialize y jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Inicializar los componentes de Materialize -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            M.AutoInit();
        });
    </script>

</body>
</html>