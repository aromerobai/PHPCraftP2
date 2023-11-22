<?php


function readTipoActo($Id_tipo_acto) {
 
    $mensaje = connection::ejecutar_consulta("SELECT * FROM eventos.Tipo_acto WHERE Id_tipo_acto='$Id_tipo_acto'");

    return $mensaje;
}

function readTipoActos() {
 
    $mensaje = connection::ejecutar_consulta("SELECT * FROM eventos.Tipo_acto ");
    var_dump($mensaje); // Verificar el contenido de $mensaje
    return $mensaje;
}
