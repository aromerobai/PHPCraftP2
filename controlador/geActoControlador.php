<!-- geActoControlador -->
<?php

include('../../modelo/connection.php');
include('../../modelo/Actos/read.php');
include('../../modelo/Actos/update.php');

function editarActo(){
    echo '<meta http-equiv="refresh" content="0;url=edit_evento.php">';
    exit();
}

function confiPonente(){
    echo '<meta http-equiv="refresh" content="0;url=">';
    exit();
}

function editarTipoEvento(){
    echo '<meta http-equiv="refresh" content="0;url=">';
    exit();
}

function adminInscritos(){
    echo '<meta http-equiv="refresh" content="0;url=">';
    exit();
}


function listarActos() {

    $resultados = readActos();

    if ($resultados) {
        
        foreach ($resultados as $acto) {
            $Id_acto = $acto['Id_acto'];
            $Titulo = $acto['Titulo'];
            $Descripcion_corta = $acto['Descripcion_corta'];
            $Descripcion_larga = $acto['Descripcion_larga'];
            $Fecha = $acto['Fecha'];
            $Hora = $acto['Hora'];
            $Id_tipo_acto = $acto['Id_tipo_acto'];
            $Num_asistentes = $acto['Num_asistentes'];
            
            echo '<div class="acto">';
            echo '  <span>ID: ' . $acto['Id_acto'] . ', Titulo: ' . $acto['Titulo'] .  '</span>';
            echo '  <button class="btn btn-editar-acto" data-id="' . $acto['Id_acto'] . '">Editar</button>';  
            echo '  <form method="POST" class="formulario-editar-acto border p-3" style="display:none;">';
            echo '      <input type="hidden" name="id_acto" value="' . $acto['Id_acto'] . '">';
            echo '      <div class="form-group">';
            echo '          <label for="titulo">Título</label>';
            echo '          <input type="text" name="titulo" id="titulo" class="form-control" required value="' . $Titulo . '">';
            echo '      </div>';
            echo '      <div class="form-group">';
            echo '          <label for="descripcion_corta">Resumen</label>';
            echo '          <input type="text" name="descripcion_corta" id="descripcion_corta" class="form-control" required value="' . $Descripcion_corta . '">';
            echo '      </div>';
            echo '      <div class="form-group">';
            echo '          <label for="descripcion_larga">Descripción</label>';
            echo '          <textarea name="descripcion_larga" id="descripcion_larga" class="form-control" rows="3" required>' . $Descripcion_larga . '</textarea>';
            echo '      </div>';
            echo '      <div class="form-group">';
            echo '          <label for="fecha">Fecha</label>';
            echo '          <input type="date" name="fecha" id="fecha" class="form-control" required value="' . $Fecha . '">';
            echo '      </div>';
            echo '      <div class="form-group">';
            echo '          <label for="hora">Hora</label>';
            echo '          <input type="time" name="hora" id="hora" class="form-control"required value="' . $Hora . '">';
            echo '      </div>';
            echo '      <div class="form-group">';
            echo '          <label for="id_tipo_acto">Tipo de Acto</label>';
            echo '          <select name="id_tipo_acto" id="id_tipo_acto" class="form-control" required value="' . $Id_tipo_acto . '">';
            echo '              <option value="1">Conferencia</option>';
            echo '              <option value="2">Evento cinematográfico</option>';
            echo '              <option value="3">Evento cultural</option>';
            echo '              <option value="4">Evento deportivo</option>';
            echo '              <option value="5">Evento gastronómico</option>';
            echo '              <option value="6">Evento musical</option>';
            echo '              <option value="7">Seminario</option>     ';  
            echo '          </select>';
            echo '      </div>';
            echo '      <div class="form-group">';
            echo '          <label for="num_asistentes">Número de Asistentes</label>';
            echo '          <input type="number" name="num_asistentes" id="num_asistentes" class="form-control" required value="' . $Num_asistentes . '">';
            echo '      </div>';
            echo '      <button type="submit" name="editarActo" class="btn btn-primary btn-block">Aplicar</button>';
            echo '  </form>';
            echo '</div>';

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['editarActo'])) {
                // Obtén los valores del formulario
                $Id_acto = $_POST['id_acto'];
                $Fecha = $_POST['fecha'];
                $Hora = $_POST['hora'];
                $Titulo = $_POST['titulo'];
                $Descripcion_corta = $_POST['descripcion_corta'];
                $Descripcion_larga = $_POST['descripcion_larga'];
                $Num_asistentes = $_POST['num_asistentes'];
                $Id_tipo_acto = $_POST['id_tipo_acto'];
            
                // Llama a la función para actualizar el acto
                updateActo($Id_acto, $Fecha, $Hora, $Titulo, $Descripcion_corta, $Descripcion_larga, $Num_asistentes, $Id_tipo_acto);
                echo '<meta http-equiv="refresh" content="0;url=./edit_evento.php">';
            }
        }
    } else {
        echo "No hay actos disponibles.";
    }
}

