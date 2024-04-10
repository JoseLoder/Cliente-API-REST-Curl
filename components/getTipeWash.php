<?php
$ws = curl_init('http://127.0.0.1:8000/api/appointments/create');
curl_setopt($ws, CURLOPT_RETURNTRANSFER, true);
$respuesta = curl_exec($ws);
curl_close($ws);

$tipesWash = json_decode($respuesta, true);

function insertTipeWash($tipesWash)
{
    foreach ($tipesWash as $tipe) {
        echo "<option value='" . $tipe['id'] . "'>" . $tipe['description'] . "</option>";
    }
}

if ($tipesWash['status'] === 'success') {
?>

    <select name="tipe_wash_id">
        <option value="">Elige un tipo de lavado..</option>
        <?php insertTipeWash($tipesWash['data']); ?>
    </select>

<?php

} else {
    echo '<strong>No se pudo obtener los tipos de lavado</strong>';
}
