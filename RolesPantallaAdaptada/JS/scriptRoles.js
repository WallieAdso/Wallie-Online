function crearRol(boton) {
    let obj={
        url:"../Controller/controllerRol.php?btn_crear="+boton
    }
    $.ajax(obj) // Aquí se cambió $ajax por $.ajax
    .done((resp)=>{
        $(".modal-content").html(resp);
    }).fail(()=>{
        $(".modal-content").html("Oops!, hemos tenido un error al cargar la vista");
    });
}

function editarRol(boton, rol_cod, rol_nom, rol_des) {
    let obj={
        url:"../Controller/controllerRol.php?btn_editar="+boton+"&cod="+rol_cod+"&nom="+rol_nom+"&des="+rol_des
    }
    $.ajax(obj) // Aquí se cambió $ajax por $.ajax
    .done((resp)=>{
        $(".modal-content").html(resp);
    }).fail(()=>{
        $(".modal-content").html("Oops!, hemos tenido un error al cargar la vista");
    });
}

function eliminarRol(boton, rol_cod, rol_nom) {
    let obj={
        url:"../Controller/controllerRol.php?btn_eliminar="+boton+"&cod="+rol_cod+"&nom="+rol_nom
    }
    $.ajax(obj) // Aquí se cambió $ajax por $.ajax
    .done((resp)=>{
        $(".modal-content").html(resp);
    }).fail(()=>{
        $(".modal-content").html("Oops!, hemos tenido un error al cargar la vista");
    });
}