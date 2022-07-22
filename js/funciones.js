function abrirformulario(dato) {
    if(dato == "abrir")
    document.getElementById('formulario').style.display = "block";

    if(dato == "cerrar"){
    document.getElementById('formulario').style.display = "none";
    }
}

function eliminarinforme_r(rid){
    var r = confirm("¿Esta seguro que desea eliminar este registro?");
    if(r == true){
        window.location = "bloques/r_humanos/eliminar.php?id="+rid;
    }
}


