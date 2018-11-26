<?php include "variables.php" ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BitByGrid Pruebas - Tags</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bitCore.css">
  <script src="js/jquery.js"></script>
  <script src="js/document.js" charset="utf-8"></script>
</head>
<body>
  <div class="bit-container">
    <a href="index.php" class="btn red lg">Regresar a Inicio</a>
    <button id="blanco" class="btn grey lg">Cambiar a blanco</button>
    <button id="negro" class="btn blue-grey lg">Cambiar a negro</button>
    <div class="bit-row">
      <h2>Normal</h2>
      <div class="bit-col-100">
        <a class="tag">Hola Mundo!</a>
        <a class="tag pill">Hola Mundo!</a>
      </div>
    </div>
    <?php foreach ($colores as $color): ?>
      <div class="bit-row">
        <h2><?php echo $color ?></h2>
        <div class="bit-col-100">
          <a class="tag <?php echo $color ?>">Hola Mundo!</a>
          <a class="tag <?php echo $color ?> pill">Hola Mundo!</a>
          <a class="tag <?php echo $color ?>-light">Hola Mundo!</a>
          <a class="tag <?php echo $color ?>-light pill">Hola Mundo!</a>
          <a class="tag <?php echo $color ?>-dark">Hola Mundo!</a>
          <a class="tag <?php echo $color ?>-dark pill">Hola Mundo!</a>
        </div>
      </div>
    <?php endforeach; ?>
    <div class="bit-row">
      <div class="bit-col-100">
        <div class="tag-group">
          <span class="tag red">Hola</span>
          <span class="tag yellow">Mundo</span>
          <span class="tag blue">!</span>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
