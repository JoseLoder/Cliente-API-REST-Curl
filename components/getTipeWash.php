<?php

$urlTipeWash = 'http://127.0.0.1:8000/api/appointments/create';

// OBTENER LOS TIPOS DE LAVADO
$tipesWash = getTipeWash($urlTipeWash);

// MOSTRAR LOS TIPOS DE LAVADO
function showTipeWash($tipesWash, $post = null)
{
    foreach ($tipesWash as $tipe) {
        $selected = $post == $tipe['id'] ? 'selected' : '';
        echo '<option value="' . $tipe['id'] . '"' . $selected . '>' . $tipe['description'] . '</option>';
    }
}

if (isset($tipesWash['status']) && $tipesWash['status'] === 'success') {
?>

    <select name="tipe_wash_id">
        <option value="">Elige un tipo de lavado..</option>
        <?php showTipeWash($tipesWash['data'], $_POST['tipe_wash_id']); ?>
    </select>

<?php

} else {
    echo '<strong>No se pudo obtener los tipos de lavado</strong>';
}
