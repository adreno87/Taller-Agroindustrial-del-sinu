function abrirformulario(dato) {
    if(dato == "abrir")
    document.getElementById('formulario').style.display = "block";

    if(dato == "cerrar"){
    document.getElementById('formulario').style.display = "none";
    }
}

function eliminartecnologia(tid){
    var msm = confirm("¿Esta seguro que desea eliminar este registro?");
    if(msm == true){
        window.location = "bloques/tecnologia/eliminar_tc.php?id=" + tid;
        
    }
}


