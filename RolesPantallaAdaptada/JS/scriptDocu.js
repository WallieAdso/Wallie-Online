function CrearDocu(boton) {
    let obj={
        url:"../Controller/controllerDocumento.php?btn_crear="+boton
    }
    $.ajax(obj) // Aquí se cambió $ajax por $.ajax
    .done((resp)=>{
        $(".modal-content").html(resp);
    }).fail(()=>{
        $(".modal-content").html("Oops!, hemos tenido un error al cargar la vista");
    });
}

function EliminarDocu(boton, docu_cod, docu_nom) {
    let obj={
        url:"../Controller/controllerDocumento.php?btn_eliminar="+boton+"&cod="+docu_cod+"&nom="+docu_nom
    }
    $.ajax(obj) // Aquí se cambió $ajax por $.ajax
    .done((resp)=>{
        $(".modal-content").html(resp);
    }).fail(()=>{
        $(".modal-content").html("Oops!, hemos tenido un error al cargar la vista");
    });
}