<?php

function createTipoActo($Id_tipo_acto, $Descripcion) {
    
    $consulta = "INSERT INTO eventos.Tipo_acto (Id_tipo_acto, Descripcion) VALUES ('$Id_tipo_acto', '$Descripcion')";

    connection::ejecutar_consulta($consulta);
    
}