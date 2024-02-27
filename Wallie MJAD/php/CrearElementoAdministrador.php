<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear elemento</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../../css/materialize.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/EstiloCrearElemento.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
    <div class="container-fluid">
      <div class="row">
        <div class="col s4 transparent"></div>
        <div class="col s4 fondoColForm center">
          <h5 class="white-text">Crear elemento</h5>

          <div class="row">
            <div class="col s2 transparent"></div>
            <form class="col s8 tarjFormulario">
              <div class="row filaInput">
                <div class="input-field col s12">
                  <select>
                    <option value="" disabled selected>Escoge un elemento</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                  <label for="" class="labelModificado">Tipo de elemento</label>
                </div>
              </div>
              <div class="row filaInput">
                <div class="input-field col s12">
                  <input placeholder="Placeholder" type="text" class="inputModificado">
                  <label for="" class="labelModificado">Numero de serie</label>
                </div>
              </div>
              <div class="row filaInput">
                <div class="input-field col s12">
                  <input placeholder="Placeholder" type="text" class="inputModificado">
                  <label for="" class="labelModificado">Bloque asignado</label>
                </div>
              </div>
              <div class="row filaInput">
                <div class="input-field col s12">
                  <input placeholder="Placeholder"type="text" class="inputModificado">
                  <label for="" class="labelModificado">Ambiente asignado</label>
                </div>
              </div>
              <div class="row filaInput">
                <div class="input-field col s12">
                  <input placeholder="Placeholder"type="text" class="inputModificado">
                  <label for="" class="labelModificado">Estado</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 filaInputBoton">
                  <button class="btnFormulario">Crear elemento</button>
                </div>
              </div>
            </form>
            <div class="col s2 transparent"></div>
          </div>

        </div>
        <div class="col s4 transparent"></div>
      </div>
      </div>

      <script>
        $(document).ready(function(){
            $('select').formSelect();
        });
      </script>
</body>
</html>