<?php


function readPonente($id_ponente) {
 
    $mensaje = connection::ejecutar_consulta("SELECT * FROM eventos.Lista_Ponentes WHERE id_ponente='$id_ponente'");

    return $mensaje;
}
