<?php
    include("../Model/CRUD_Conexion.php");
    //---------------------LISTAR DOCUMENTOS------------------------
    $tabla_nom="Documento";

    $listar_roles=new classCRUD();
    $lista=$listar_roles->selectBD($tabla_nom,null,null);

    // --------------------REGISTRAR DOCUMENTO----------------------
    if (isset($_POST['registrar'])) {
        $Docu_cod=$_POST['Docu_cod'];
        $Docu_nom=$_POST['Docu_nom'];
        $Docu_des=$_POST['Docu_des'];
        $tabla_nom=$_POST['tabla_nom'];

        $campos=array(
            'Docu_cod',
            'Docu_nom',
            'Docu_des'
        );
        $valores=array(
            $DI_cod,
            $DI_nom,
            $DI_des
        );
        $crear_Documento=new classCRUD();
        $crear_Documento->insertBD($tabla_nom,$valores,$campos);

        header("location:../php/listarDocumento.php");
    }
    // --------------------ACTUALIZAR ROLES----------------------

    if (isset($_POST['actualizar'])) {
        $camp_pk=$_POST['camp_pk'];
        $upd_cod=$_POST['upd_cod'];
        $upd_nom=$_POST['upd_nom'];
        $upd_des=$_POST['upd_des'];

        $arreglo=array(
            'Docu_nom'=>$upd_nom,
            'Docu_des'=>$upd_des
        );

        $actualizar_Docu=new classCRUD();
        echo $actualizar_Documento->updateBD($tabla_nom,$camp_pk, $upd_cod,$arreglo);

        header("location:../php/listarDocumento.php");
    }

    // --------------------ELIMINAR ROLES----------------------

    if (isset($_POST['borrar'])) {
        $del_cod=$_POST['Docu_delete'];

        $eliminar_Docu=new classCRUD();
        $eliminar_Docu->deleteBD($tabla_nom,$del_cod);

        header("location:../php/listarDocumento.php");
    }

    // ---------------------CONTENIDO MODALES---------------------
    if (isset($_GET['btn_crear'])) {
        include('../php/CrearDocu.php');
    }

    // // if (isset($_GET['btn_editar'])) {
    // //     $docu_cod=$_GET['cod'];
    // //     $docu_nom=$_GET['nom'];
    // //     $docu_des=$_GET['des'];

    // //     include('../php/editarDocu.php');
    // }

    if (isset($_GET['btn_eliminar'])) {
        $docu_cod=$_GET['cod'];
        $docu_nom=$_GET['nom'];
        
        include('../php/eliminarDocu.php');
    }
?>