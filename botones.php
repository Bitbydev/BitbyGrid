<?php include "variables.php" ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pruebas BitByGrid - Botones</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bitCore.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="js/document.js" charset="utf-8"></script>
</head>
<body>
  <div class="bit-container">
    <a href="index.php" class="btn btn-red btn-lg">Regresar a Inicio</a>
    <button id="blanco" class="btn btn-light btn-lg">Cambiar a blanco</button>
    <button id="negro" class="btn btn-dark btn-lg">Cambiar a negro</button>
    <div class="bit-col-100">
      <h2>Normal</h2>
      <button class="btn btn-sm">Hola Mundo!</button>
      <button class="btn btn">Hola Mundo!</button>
      <button class="btn btn-lg">Hola Mundo!</button>
    </div>
    <?php foreach ($colores as $color): ?>
    <div class="bit-col-100">
      <h2><?php echo $color ?></h2>
      <button class="btn btn-<?php echo $color; ?> btn-sm">Hola Mundo!</button>
      <button class="btn btn-<?php echo $color; ?> btn">Hola Mundo!</button>
      <button class="btn btn-<?php echo $color; ?> btn-lg">Hola Mundo!</button>
      <button class="btn btn-<?php echo $color; ?>-outline btn-sm">Hola Mundo!</button>
      <button class="btn btn-<?php echo $color; ?>-outline btn">Hola Mundo!</button>
      <button class="btn btn-<?php echo $color; ?>-outline btn-lg">Hola Mundo!</button>
    </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
