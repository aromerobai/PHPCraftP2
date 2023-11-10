<?php

class loginControlador {
    
    public function mostrarFormularioLogin(){
        // Imprimir la meta redirección
        echo '<meta http-equiv="refresh" content="0;url=vista/login.php">';
        exit();
    }

    public function procesarLogin(){

    }

    public function mostrarFormularioRegistro(){
        echo '<meta http-equiv="refresh" content="0;url=vista/registro.php">';
        exit();
    }


}
?>