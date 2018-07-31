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
    <a href="index.php" class="btn red lg">Regresar a Inicio</a>
    <button id="blanco" class="btn grey lg">Cambiar a blanco</button>
    <button id="negro" class="btn blue-grey lg">Cambiar a negro</button>
    <div class="bit-row">
      <div class="bit-col-100">
        <h2>Normal</h2>
        <button class="btn sm">Hola Mundo!</button>
        <button class="btn">Hola Mundo!</button>
        <button class="btn lg">Hola Mundo!</button>
        <button class="btn sm disabled">Hola Mundo!</button>
        <button class="btn disabled">Hola Mundo!</button>
        <button class="btn lg disabled">Hola Mundo!</button>
      </div>
    </div>
    <div class="bit-row">
      <button class="btn block">Hola Mundo!</button>
    </div>
    <div class="bit-row">
      <button class="btn disabled block">Hola Mundo!</button>
    </div>
    <div class="bit-row">
      <div class="btn-group sm">
        <button class="btn">1</button>
        <button class="btn blue">2</button>
        <button class="btn yellow">3</button>
        <button class="btn red">4</button>
        <button class="btn teal">5</button>
      </div>
    </div>
    <div class="bit-row">
      <div class="btn-group">
        <button class="btn">1</button>
        <button class="btn blue">2</button>
        <button class="btn yellow">3</button>
        <button class="btn red">4</button>
        <button class="btn teal">5</button>
      </div>
    </div>
    <div class="bit-row">
      <div class="btn-group lg">
        <button class="btn">1</button>
        <button class="btn blue">2</button>
        <button class="btn yellow">3</button>
        <button class="btn red">4</button>
        <button class="btn teal">5</button>
      </div>
    </div>
    <div class="bit-row">
      <div class="btn-group-vertical sm">
        <button class="btn">1</button>
        <button class="btn blue">2</button>
        <button class="btn yellow">3</button>
        <button class="btn red">4</button>
        <button class="btn teal">5</button>
      </div>
      <div class="btn-group-vertical">
        <button class="btn">1</button>
        <button class="btn blue">2</button>
        <button class="btn yellow">3</button>
        <button class="btn red">4</button>
        <button class="btn teal">5</button>
      </div>
      <div class="btn-group-vertical lg">
        <button class="btn">1</button>
        <button class="btn blue">2</button>
        <button class="btn yellow">3</button>
        <button class="btn red">4</button>
        <button class="btn teal">5</button>
      </div>
    </div>
    <?php foreach ($colores as $color): ?>
    <div class="bit-row">
      <div class="bit-col-100">
        <h2><?php echo $color ?></h2>
        <button class="btn <?php echo $color; ?> sm">Hola Mundo!</button>
        <button class="btn <?php echo $color; ?>">Hola Mundo!</button>
        <button class="btn <?php echo $color; ?> lg">Hola Mundo!</button>
        <button class="btn <?php echo $color; ?>-outline sm">Hola Mundo!</button>
        <button class="btn <?php echo $color; ?>-outline">Hola Mundo!</button>
        <button class="btn <?php echo $color; ?>-outline lg">Hola Mundo!</button>
        <button class="btn <?php echo $color; ?> sm disabled">Hola Mundo!</button>
        <button class="btn <?php echo $color; ?> disabled">Hola Mundo!</button>
        <button class="btn <?php echo $color; ?> lg disabled">Hola Mundo!</button>
      </div>
    </div>
    <div class="bit-row">
      <button class="btn <?php echo $color; ?> block">Hola Mundo!</button>
    </div>
    <div class="bit-row">
      <button class="btn <?php echo $color; ?>-outline block">Hola Mundo!</button>
    </div>
    <div class="bit-row">
      <button class="btn <?php echo $color; ?> disabled block">Hola Mundo!</button>
    </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
