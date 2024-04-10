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
    <form action="./addAppointments.php" method="post">

        <label for="name">Nombre</label>
        <input type="text" name="name" id="name">

        <label for="phone">Teléfono</label>
        <input type="text" name="phone" id="phone">

        <div class="car" role="contentinfo">

            <h3>Coche</h3>
            <label for="brand">marca</label>
            <input type="text" name="brand" id="brand">

            <label for="model">Modelo</label>
            <input type="text" name="model" id="model">

            <label for="license_plate">Matrícula</label>
            <input type="text" name="license_plate" id="license_plate">

        </div>

        <h3>Tipo de lavado</h3>

        <?php include 'getTipeWash.php'; ?>

        <div role="contentinfo">
            <label for="wheels">Lavado de llantas</label>
            <input type="checkbox" name="wheels" id="wheels" value="15">
        </div>

        <label for="entry">Fecha</label>
        <input type="date" name="entry" id="entry">

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
    </style>

</body>

</html>