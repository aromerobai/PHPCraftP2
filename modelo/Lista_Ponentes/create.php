<?php

function createPonente($id_ponente, $Id_persona, $Id_acto, $Orden) {
    
    $consulta = "INSERT INTO eventos.Lista_Ponentes (id_ponente, Id_persona, Id_acto, Orden) VALUES ('$id_ponente', '$Id_persona', '$Id_acto', '$Orden')";

    connection::ejecutar_consulta($consulta);
    
}