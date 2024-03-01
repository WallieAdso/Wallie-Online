<?php
    include("../Model/CRUD_Conexion.php");
    //---------------------LISTAR USUARIOS------------------------
    $tabla_nom="documento";
    if (isset($_POST['btnFormulario'])) {
        $campo=$_POST["opciones"];
        $condicion=$_POST["condicion"];
        $listar_roles=new classCRUD();
        $datos=$listar_roles->selectBD($tabla_nom,$campo,$condicion);
    }
    else{
        $tabla ="documento";
        $campo=$_POST["opciones"]??null;
        $condicion=$_POST["condicion"]??null;
        $listar_roles=new classCRUD();
        $datos=$listar_roles->selectBD($tabla_nom,$campo,$condicion);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver roles</title>
</head>
<body>
    <div class="row">
        <div class="col s12">
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
                <tbody>
                    <?php
                        //forma de imprimir lo datos en la pantalla
                        foreach ($datos as $valor) {
                            ?>
                              <tr>
                                  <td class="center"><?php echo $valor["docu_cod"];?></td>
                                  <td class="center"></td>
                                  <td class="center"><?php echo $valor["docu_nom"];?></td>
                                  <td class="center"></td>
                                  <td>
                                      <div class="center">
                                          <!-- <a class="modal-trigger" href="#modalCrudRol" onclick="editarRol('editar','<?php echo $valor['rol_cod']?>','<?php echo $valor['rol_nom'];?>','<?php echo $valor['rol_des'];?>')"><i class="material-icons">border_color</i></a> -->
                                          <a class="modal-trigger"  href="#modalCrudDocu" onclick="EliminarDocu('eliminar','<?php echo $valor['docu_cod']?>','<?php echo $valor['docu_nom'];?>')"><i class="material-icons">cancel</i></a>
                                      </div>
                                  </td>
                              </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<?php
?>