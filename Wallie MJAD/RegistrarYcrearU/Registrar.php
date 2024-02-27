<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleRegistrar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="contenedor_padre">
            <div class="contenedor_datos">
                <div>
                    <p>Registrar Un Elemento</p>
                </div>
                <div class="row">
                  <form class="col s12">
                    <div class="row">
    <!--------------------------------------filas de formulario------------------------------- -->
                      <div class="input-field col s6">
                         <select class="browser-default selects">
                           <option value="" disabled selected>Tipo elemento</option>
                           <option value="1">Option 1</option>
                           <option value="2">Option 2</option>
                           <option value="3">Option 3</option>
                         </select>
                      </div>
                      <div class="input-field col s6">
                         <select class="browser-default selects">
                           <option value="" disabled selected>Asignar Bloque:</option>
                           <option value="1">Option 1</option>
                           <option value="2">Option 2</option>
                           <option value="3">Option 3</option>
                         </select>
                      </div>
    <!---------------------------------------filas de formulario------------------------------ -->
    <!--------------------------------------filas de formulario------------------------------- -->
                        <div class="input-field col s6">
                         <select class="browser-default selects">
                           <option value="" disabled selected>Asignar Ambiente</option>
                           <option value="1">Option 1</option>
                           <option value="2">Option 2</option>
                           <option value="3">Option 3</option>
                         </select>
                      </div>
                      <div class="input-field col inputs">
                           <i class="material-icons prefix">assignment</i>
                           <input id="icon_telephone" type="tel" class="validate">
                           <label class="active" for="icon_telephone">Serial</label>
                      </div>
    <!---------------------------------------filas de formulario------------------------------ -->
    <!--------------------------------------filas de formulario------------------------------- -->
                      <div class="input-field col inputs">
                           <i class="material-icons prefix">compare</i>
                           <input id="icon_prefix" type="text" class="validate">
                           <label class="active" for="icon_prefix">Modelo:</label>
                      </div>
                      <div class="input-field col inputs">
                           <i class="material-icons prefix">phone</i>
                           <input id="icon_telephone" type="tel" class="validate">
                           <label class="active" for="icon_telephone">Marca</label>
                      </div>
    <!---------------------------------------filas de formulario------------------------------ -->
    <!--------------------------------------filas de formulario------------------------------- -->
                      <div class="input-field col inputs">
                           <i class="material-icons prefix">color_lens</i>
                           <input id="icon_prefix" type="text" class="validate">
                           <label class="active" for="icon_prefix">Color:</label>
                      </div>
                      <div class="input-field col inputs">
                           <i class="material-icons prefix">border_color</i>
                           <input id="icon_telephone" type="tel" class="validate">
                           <label class="active" for="icon_telephone">Descripción:</label>
                      </div>
    <!---------------------------------------filas de formulario------------------------------ -->
                    </div>
                    <input class="enviar" type="submit" value="Enviar">
                  </form>
                </div>
            </div>
        </div>
    </section>
    <footer></footer>
    <script>
         $(document).ready(function() {
                M.updateTextFields();
            });
    </script>
</body>
</html>