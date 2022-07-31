function abrirformulario(dato) {
    if(dato == "abrir")
    document.getElementById('formulario').style.display = "block";

    if(dato == "cerrar"){
    document.getElementById('formulario').style.display = "none";
    }
}

function eliminarinforme_co(cont){
    var mensaje = confirm("¿Esta seguro que desea eliminar este informe?");
    if(mensaje == true){

        window.location = "bloques/contabilidad/eliminar_co.php?id=" +cont;
    }
}