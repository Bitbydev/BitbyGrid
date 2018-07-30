<?php include "variables.php" ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BitByGrid Pruebas - Badges</title>
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
    <div class="row">
      <h2>Normal</h2>
      <div class="bit-col-100">
        <a class="badge">Hola Mundo!</a>
        <a class="badge pill">Hola Mundo!</a>
      </div>
    </div>
    <?php foreach ($colores as $color): ?>
      <div class="row">
        <h2><?php echo $color ?></h2>
        <div class="bit-col-100">
          <a class="badge <?php echo $color ?>">Hola Mundo!</a>
          <a class="badge <?php echo $color ?> pill">Hola Mundo!</a>
          <a class="badge <?php echo $color ?>-light">Hola Mundo!</a>
          <a class="badge <?php echo $color ?>-light pill">Hola Mundo!</a>
          <a class="badge <?php echo $color ?>-dark">Hola Mundo!</a>
          <a class="badge <?php echo $color ?>-dark pill">Hola Mundo!</a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
