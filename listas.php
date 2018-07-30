<?php include "variables.php" ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BitByDev Pruebas - Listas</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bitCore.css">
  <!--<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  --><script src="js/document.js" charset="utf-8"></script>
</head>
<body>
  <div class="bit-container">
    <a href="index.php" class="btn red lg">Regresar a Inicio</a>
    <button id="blanco" class="btn grey lg">Cambiar a blanco</button>
    <button id="negro" class="btn blue-grey lg">Cambiar a negro</button>
    <?php foreach ($colores as $color): ?>
      <div class="row">
        <h2><?php echo $color ?></h2>
        <div class="bit-col-md-25 bit-col-sm-100">
          <div class="list-group <?php echo $color ?>">
            <a class="item active flex-container flex-justify-between flex-align-center">Texto 1 <span class="badge <?php echo $color ?>-light">5</span></a>
            <a class="item flex-container flex-justify-between flex-align-center">Texto 2 <span class="badge <?php echo $color ?>">5</span></a>
            <a class="item flex-container flex-justify-between flex-align-center">Texto 3 <span class="badge <?php echo $color ?>">5</span></a>
            <a class="item flex-container flex-justify-between flex-align-center">Texto 4 <span class="badge <?php echo $color ?>">5</span></a>
            <a class="item flex-container flex-justify-between flex-align-center">Texto 5 <span class="badge <?php echo $color ?>">5</span></a>
          </div>
        </div>
        <div class="bit-col-md-25 bit-col-offset-5">
          <div class="list-group <?php echo $color ?> hover">
            <a class="item active flex-container flex-justify-between flex-align-center">Texto 1 <span class="badge pill <?php echo $color ?>-dark">5</span></a>
            <a class="item flex-container flex-justify-between flex-align-center">Texto 2 <span class="badge pill <?php echo $color ?>">5</span></a>
            <a class="item flex-container flex-justify-between flex-align-center">Texto 3 <span class="badge pill <?php echo $color ?>">5</span></a>
            <a class="item flex-container flex-justify-between flex-align-center">Texto 4 <span class="badge pill <?php echo $color ?>">5</span></a>
            <a class="item flex-container flex-justify-between flex-align-center">Texto 5 <span class="badge pill <?php echo $color ?>">5</span></a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
