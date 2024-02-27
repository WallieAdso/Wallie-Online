<?php
    include("../Model/CRUD_Conexion.php");
    //---------------------LISTAR USUARIOS------------------------
    $tabla_nom="rol";
    if (isset($_POST['btnFormulario'])) {
        $campo=$_POST["opciones"];
        $condicion=$_POST["condicion"];
        $listar_roles=new classCRUD();
        $datos=$listar_roles->selectBD($tabla_nom,$campo,$condicion);
    }
    else{
        $tabla ="rol";
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
    <table class="highlight tabla">
        <tbody>
            <?php
                //forma de imprimir lo datos en la pantalla
                foreach ($datos as $valor) {
                    ?>
                      <tr>
                          <td class="center"><?php echo $valor["rol_cod"];?></td>
                          <td class="center"></td>
                          <td class="center"><?php echo $valor["rol_nom"];?></td>
                          <td class="center"></td>
                          <td>
                              <div class="center">
                                  <a class="modal-trigger" href="#modalCrudRol" onclick="editarRol('editar','<?php echo $valor['rol_cod']?>','<?php echo $valor['rol_nom'];?>','<?php echo $valor['rol_des'];?>')"><i class="material-icons">border_color</i></a>
                                  <a class="modal-trigger"  href="#modalCrudRol" onclick="eliminarRol('eliminar','<?php echo $valor['rol_cod']?>','<?php echo $valor['rol_nom'];?>')"><i class="material-icons">cancel</i></a>
                              </div>
                          </td>
                      </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>
<?php
?>