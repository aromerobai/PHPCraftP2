<?php

function createPersonas($id, $nombre, $apellido1, $apellido2) {
    
    $consulta = "INSERT INTO eventos.Personas (id_persona, nombre, apellido1, apellido2) VALUES ('$id', '$nombre', '$apellido1', '$apellido2')";

    connection::ejecutar_consulta($consulta);
    
}