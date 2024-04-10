<?php
include 'logic.php';

// VALIDAR SI SE ENVIO EL FORMULARIO
if (filter_input_array(INPUT_POST)) {

    // URL DE LA API
    $urlAppointments = 'http://127.0.0.1:8000/api/appointments/store';

    // OBTENER LOS DATOS DEL FORMULARIO
    $appointments = [
        'name' => filter_input(INPUT_POST, 'name'),
        'phone' => filter_input(INPUT_POST, 'phone'),
        'brand' => filter_input(INPUT_POST, 'brand'),
        'model' => filter_input(INPUT_POST, 'model'),
        'license_plate' => filter_input(INPUT_POST, 'license_plate'),
        'tipe_wash_id' => filter_input(INPUT_POST, 'tipe_wash_id'),
        'wheels' => filter_input(INPUT_POST, 'wheels'),
        'entry' => filter_input(INPUT_POST, 'entry')
    ];

    // ENVIAR LOS DATOS A LA API Y OBTENER LA RESPUESTA
    $response = requestApiStore($urlAppointments, $appointments);

    // VALIDAR SI LA RESPUESTA ES EXITOSA
    if (isset($response['status']) && $response['status'] === 'success') {

        include 'components/success.php';
    } else if (isset($response['status']) && $response['status'] === 'error') {

        $errors = $response['errors'];

        var_dump($errors);

        include 'components/form.php';
    } else {

        include 'components/error.php';
    }
} else {

    include 'components/form.php';
}
