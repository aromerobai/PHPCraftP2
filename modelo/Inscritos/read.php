<?php


function readInscripcion($Id_inscripcion) {
 
    $mensaje = connection::ejecutar_consulta("SELECT * FROM eventos.Inscritos WHERE Id_inscripcion='$Id_inscripcion'");

    return $mensaje;
}