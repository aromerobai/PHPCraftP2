<?php


function readActo($Id_acto) {
 
    $mensaje = connection::ejecutar_consulta("SELECT * FROM eventos.Actos WHERE Id_acto='$Id_acto'");

    return $mensaje;
}

function readActos() {
 
    $mensaje = connection::ejecutar_consulta("SELECT * FROM eventos.Actos");

    return $mensaje;
}