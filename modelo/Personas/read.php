<?php


function readPersona($nombre) {
 
    $mensaje = connection::ejecutar_consulta("SELECT * FROM eventos.Personas WHERE Nombre='$nombre'");

    return $mensaje;
}
