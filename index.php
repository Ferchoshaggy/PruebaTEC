<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/Public/bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
    
    <title>Formulario Medico</title>
</head>
<body>

<br>
<div class="container form-inf">
<div class="d-flex justify-content-center">
<label class="label-body">Formulario</label>
</div>

<div class="card-body"> 
<div class="row">
<label class="label-row">Datos Personales</label>

<div class="col-md-6">
<label for="nombre" class="label-col">Nombre</label>
<input type="text" name="nombre" id="nombre" class="form-control">
</div>

<div class="col-md-3">
    <label for="fecha" class="label-col">Fecha de Nacimiento</label>
    <input type="date" name="fecha" id="fecha" class="form-control" >
</div>

<div class="col-md-3">
    <label for="sexo" class="label-col">Sexo</label>
  <select class="form-select" name="sexo" id="sexo" onchange="getDiagnosticoData()">
  <option value="NO">Seleccione Genero</option>
  <option value="HOMBRE">Hombre</option>
  <option value="MUJER">Mujer</option>
</select>
</div>
</div>
<br>
<div class="row">
    <label class="label-row">Datos Antropometricos</label>

    <div class="col-md-3">
<label for="temperatura" class="label-col">Temperatura</label>
<div class="input-group">
    <input type="number" name="temperatura" id="temperatura" class="form-control">
    <div class="input-group-append">
    <span class="input-group-text">°</span>
  </div>
</div>
    </div>

    <div class="col-md-3">
    <label for="estatura" class="label-col">Estatura</label>
<div class="input-group">
    <input type="number" name="estatura" id="estatura" class="form-control">
    <div class="input-group-append">
    <span class="input-group-text">M</span>
  </div>
</div>
    </div>

    <div class="col-md-3">
    <label for="peso" class="label-col">Peso</label>
<div class="input-group">
    <input type="number" name="peso" id="peso" class="form-control">
    <div class="input-group-append">
    <span class="input-group-text">KG</span>
  </div>
</div>
    </div>

    <div class="col-md-3">
    <label for="oxigeno" class="label-col">Saturacion de oxigeno</label>
    <div class="input-group">
    <input type="number" name="oxigeno" id="oxigeno" class="form-control">
    <div class="input-group-append">
    <span class="input-group-text">SpO2</span>
  </div>
</div>
    </div>

</div>

<br>
<div class="row">
<label class="label-row">Datos Adicionales</label>
    <div class="col-md-12">
<label for="motivo" class="label-col">Motivo de consulta</label>
<textarea rows="" cols="" name="motivo" id="motivo" class="form-control"></textarea>
    </div>
</div>

<div class="row">
   <div class="col-md-12" id="dropdown">
   <label for="diagnostico" class="label-col">Diagnostico</label>
   <input type="text" name="diagnostico" id="diagnostico" class="form-control">

   </div>
</div>
<br>

<div class="row">
    <div class="col-md-4">
    <button class="btn btn-success btn-lg" id="enviar">Enviar</button>
    </div>
</div>
<br>


</div>
</div>


<script src="/Public/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="/js/ApiDiagnostico.js"></script>
<script src="/node_modules/jquery/dist/jquery.min.js"></script>
</body>
</html>