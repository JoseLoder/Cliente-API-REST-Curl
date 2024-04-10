<?php
function requestApiStore($url, $data)
{

    // TRANSFORMAR EL ARRAY EN UNA PETICION HTTP
    $dataAppointments = http_build_query($data);

    // INICIAR CURL
    $ch = curl_init();

    // ESTABLECER CONEXIÓN CURL
    curl_setopt($ch, CURLOPT_URL, $url);
    // ESTABLECER METODO DE PETICION POST
    curl_setopt($ch, CURLOPT_POST, true);
    // ESTABLECER DATOS A ENVIAR
    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataAppointments);
    // ESTABLECER QUE LA RESPUESTA SE GUARDE EN UNA VARIABLE
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // EJECUTAR LA PETICION
    $response = curl_exec($ch);

    // CERRAR LA CONEXION
    curl_close($ch);

    // DECODIFICAR JSON
    return json_decode($response, true);
}

function getTipeWash($url)
{
    $ws = curl_init();

    curl_setopt($ws, CURLOPT_URL, $url);
    curl_setopt($ws, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ws);

    curl_close($ws);

    return json_decode($response, true);
}
