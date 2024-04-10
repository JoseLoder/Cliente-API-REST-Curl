<?php

$urlTipeWash = 'http://127.0.0.1:8000/api/appointments/create';

// OBTENER LOS TIPOS DE LAVADO
$tipesWash = getTipeWash($urlTipeWash);

// MOSTRAR LOS TIPOS DE LAVADO
function showTipeWash($tipesWash, $post = null)
{
    // RECORRER LOS TIPOS DE LAVADO
    foreach ($tipesWash as $tipe) {

        // COMPROBAR SI EL TIPO DE LAVADO ESTABA SELECCIONADO
        $selected = $post == $tipe['id'] ? 'selected' : '';
        // MOSTRAR EL TIPO DE LAVADO
        echo '<option value="' . $tipe['id'] . '"' . $selected . '>' . $tipe['description'] . '</option>';
    }
}

// COMPROBAR SI SE OBTUVIERON LOS TIPOS DE LAVADO
if (isset($tipesWash['status']) && $tipesWash['status'] === 'success') {

?>
    <!-- MOSTRAR LOS TIPOS DE LAVADO -->
    <select name="tipe_wash_id">
        <option value="">Elige un tipo de lavado..</option>
        <?php showTipeWash($tipesWash['data'], $_POST['tipe_wash_id']); ?>
    </select>

<?php

} else {
    echo '<strong>No se pudo obtener los tipos de lavado</strong>';
}
