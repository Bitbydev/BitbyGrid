<?php include "variables.php" ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pruebas BitByGrid - Imagenes</title>
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
      <div class="bit-col-100">
        <img src="http://placeimg.com/350/350/tech" alt="">
        <img class="rounded" src="http://placeimg.com/350/350/tech" alt="">
        <img class="bordered" src="http://placeimg.com/350/350/tech" alt="">
        <img class="fill" src="http://placeimg.com/350/350/tech" alt="">
      </div>
    </div>
    <?php foreach ($colores as $color): ?>
      <div class="row">
        <div class="bit-col-25"><img src="http://placeimg.com/350/350/tech" alt="" class="bordered <?php echo $color ?>"></div>
        <div class="bit-col-25"><img src="http://placeimg.com/350/350/tech" alt="" class="fill <?php echo $color ?>"></div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
