<?php

function oldValue($name)
{
    if (isset($_POST[$name])) {
        echo 'value="' . $_POST[$name] . '"';
    }
}

function showError($errors, $field)
{
    if (isset($errors[$field])) {
        echo '<span>' . $errors[$field][0] . '</span>';
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>
    <form action="./" method="post">

        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" <?php oldValue('name') ?>>
        <?php showError(isset($errors) ? $errors : '', 'name') ?>

        <label for="phone">Teléfono</label>
        <input type="text" name="phone" id="phone" <?php oldValue('phone') ?>>
        <?php showError(isset($errors) ? $errors : '', 'phone') ?>

        <div class="car" role="contentinfo">

            <h3>Coche</h3>
            <label for="brand">marca</label>
            <input type="text" name="brand" id="brand" <?php oldValue('brand') ?>>
            <?php showError(isset($errors) ? $errors : '', 'brand') ?>

            <label for="model">Modelo</label>
            <input type="text" name="model" id="model" <?php oldValue('model') ?>>
            <?php showError(isset($errors) ? $errors : '', 'model') ?>

            <label for="license_plate">Matrícula</label>
            <input type="text" name="license_plate" id="license_plate" <?php oldValue('license_plate') ?>>
            <?php showError(isset($errors) ? $errors : '', 'license_plate') ?>


        </div>

        <h3>Tipo de lavado</h3>

        <?php
        include 'getTipeWash.php';
        showError(isset($errors) ? $errors : '', 'tipe_wash_id')
        ?>

        <div role="contentinfo">
            <label for="wheels">Lavado de llantas</label>
            <input type="checkbox" name="wheels" id="wheels" value="15" <?php echo isset($_POST['wheels']) ? 'checked' : '' ?>>
        </div>

        <label for="entry">Fecha</label>
        <input type="date" name="entry" id="entry" <?php oldValue('entry') ?>>
        <?php showError(isset($errors) ? $errors : '', 'entry') ?>

        <input type="submit" value="Enviar">

    </form>
    <style>
        form,
        .car {
            display: flex;
            flex-direction: column;
            text-align: center;
            gap: 1rem;
        }

        span {
            color: red;
            font-weight: bold;
        }
    </style>

    <!--
    Campos del formulario:
Campo name=“name” type=“text”
Campo name="phone” type=“text”
Campo name="brand” type=“text”
Campo name="model” type=“text”
Campo name="license_plate” type=“text”
Campo name="tipe_wash_id” type=“select”
Campo name="wheels” type=“checkbox” value=“15”
Campo name="entry” type=“date”
Botón de envío
-->

</body>

</html>