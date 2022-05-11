function abrirformulario(dato) {
    if(dato == "abrir")
    document.getElementById('formulario').style.display = "block";

    if(dato == "cerrar"){
    document.getElementById('formulario').style.display = "none";
    }
}



function eliminarventas(ven){
    var mensaje = confirm("¿Esta seguro que desea eliminar este producto?");
    if(mensaje == true){


        window.location = "bloques/ventas/eliminar_m.php?id=" + ven;
    }
}