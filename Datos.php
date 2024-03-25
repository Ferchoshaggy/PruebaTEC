<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/Public/bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/stylesImp.css">
    <title>Informacion</title>
</head>

<body>

    <br>
    <div class="container form-inf">
        <label class="label-grand">Informacion Personal</label>

        <div class="row">
            <div class="col-md-4">
                <label class="label-med">Nombre:</label>
                <label class="label-med"><?php echo (isset($_POST['nombre']) ? $_POST['nombre'] : "NULL") ?></label>
            </div>

            <div class="col-md-4">
                <label class="label-med">Fecha de Nacimiento:</label>
                <label class="label-med"><?php echo (isset($_POST['fecha']) ? $_POST['fecha'] : "NULL") ?></label>
            </div>

            <div class="col-md-4">
                <label class="label-med">Sexo:</label>
                <label class="label-med"><?php echo (isset($_POST['sexo']) ? $_POST['sexo'] : "NULL") ?></label>
            </div>
        </div>
        <br>

        <label class="label-grand">Datos Antropometricos</label>
        <div class="row">
            <div class="col-md-3">
                <label class="label-med">Temperatura:</label>
                <label class="label-med"><?php echo (isset($_POST['temperatura']) ? $_POST['temperatura'] : "NULL") ?>°</label>
            </div>
            <div class="col-md-3">
                <label class="label-med">Estatura:</label>
                <label class="label-med"><?php echo (isset($_POST['estatura']) ? $_POST['estatura'] : "NULL") ?></label>
            </div>
            <div class="col-md-3">
                <label class="label-med">Peso:</label>
                <label class="label-med"><?php echo (isset($_POST['peso']) ? $_POST['peso'] : "NULL") ?></label>
            </div>
            <div class="col-md-3">
                <label class="label-med">Saturacion de Oxigeno:</label>
                <label class="label-med"><?php echo (isset($_POST['oxigeno']) ? $_POST['oxigeno'] : "NULL") ?></label>
            </div>
        </div>
        <br>

        <label class="label-grand">Datos Adicionales</label>
        <div class="row">
            <div class="col-md-12">
                <label class="label-med">Motivo de Consulta:</label>
                <label class="label-med"><?php echo (isset($_POST['motivo']) ? $_POST['motivo'] : "NULL") ?></label>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <label class="label-med">Diagnostico:</label>
                <label class="label-med"><?php echo (isset($_POST['diagnostico']) ? $_POST['diagnostico'] : "NULL") ?></label>
            </div>
        </div>
        <br>

    </div>


    <script src="/Public/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>