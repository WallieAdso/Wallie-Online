<?php
    include("../Model/CRUD_Conexion.php");
    //---------------------LISTAR ROLES------------------------
    $tabla_nom="rol";

    $listar_roles=new classCRUD();
    $lista=$listar_roles->selectBD($tabla_nom,null,null);

    // --------------------REGISTRAR ROLES----------------------
    if (isset($_POST['registrar'])) {
        $rol_cod=$_POST['rol_cod'];
        $rol_nom=$_POST['rol_nom'];
        $rol_des=$_POST['rol_des'];
        $tabla_nom=$_POST['tabla_nom'];

        $campos=array(
            'rol_cod',
            'rol_nom',
            'rol_des'
        );
        $valores=array(
            $rol_cod,
            $rol_nom,
            $rol_des
        );
        $crear_rol=new classCRUD();
        $crear_rol->insertBD($tabla_nom,$valores,$campos);

        ?>
        <script type="text/javascript">
            modalExitoso(); //
        </script>

        <?php

        header("location:../php/listarRol.php");
    }
    // --------------------ACTUALIZAR ROLES----------------------

    if (isset($_POST['actualizar'])) {
        $camp_pk=$_POST['camp_pk'];
        $upd_cod=$_POST['upd_cod'];
        $upd_nom=$_POST['upd_nom'];
        $upd_des=$_POST['upd_des'];

        $arreglo=array(
            'rol_nom'=>$upd_nom,
            'rol_des'=>$upd_des
        );

        $actualizar_rol=new classCRUD();
        echo $actualizar_rol->updateBD($tabla_nom,$camp_pk, $upd_cod,$arreglo);

        header("location:../php/listarRol.php");
    }

    // --------------------ELIMINAR ROLES----------------------

    if (isset($_POST['borrar'])) {
        $del_cod=$_POST['rol_delete'];

        $eliminar_rol=new classCRUD();
        $eliminar_rol->deleteBD($tabla_nom,$del_cod);

        header("location:../php/listarRol.php");
    }

    // ---------------------CONTENIDO MODALES---------------------
    if (isset($_GET['btn_crear'])) {
        include('../php/crearRol.php');
    }

    if (isset($_GET['btn_editar'])) {
        $rol_cod=$_GET['cod'];
        $rol_nom=$_GET['nom'];
        $rol_des=$_GET['des'];

        include('../php/editarRol.php');
    }

    if (isset($_GET['btn_eliminar'])) {
        $rol_cod=$_GET['cod'];
        $rol_nom=$_GET['nom'];
        
        include('../php/eliminarRol.php');
    }
?>