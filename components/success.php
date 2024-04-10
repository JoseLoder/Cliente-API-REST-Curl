<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ticket</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>

    <h1>La cita se ha registrado correctamente</h1>
    <h2>Detalles de la cita</h2>
    <ul>
        <li>Fecha:
            <?php

            $entryDate = new DateTime($ticket['entry']);
            echo $entryDate->format('d/m/Y');

            ?>
        </li>
        <li>Hora de entrada:
            <?php

            $entryhour = new DateTime($ticket['entry']);
            echo $entryhour->format('h:i A');

            ?>
        </li>
        <li>Hora de salida:
            <?php

            $exitHour = new DateTime($ticket['exit']);
            echo $exitHour->format('h:i A');

            ?>
        </li>
        <li>Nombre: <?php echo $ticket['name'] ?></li>
        <li>Teléfono: <?php echo $ticket['phone'] ?></li>
        <li>Coche: <?php echo $ticket['car'] ?></li>
        <li>Matricula: <?php echo $ticket['license_plate'] ?></li>
        <li>Tipo de lavado: <?php echo $ticket['tipe_wash'] ?></li>
        <li>Lavado de llantas: <?php echo $ticket['wheels'] > 0 ? 'Sí' : 'No' ?></li>
        <li>Precio total: <?php echo $ticket['price'] ?></li>

        <a href="./">Volver</a>

</body>

</html>