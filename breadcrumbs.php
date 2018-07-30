<?php include "variables.php" ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pruebas BitByGrid - Breadcrumbs</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bitCore.css">
  <script src="js/jquery.js"></script>
  <script src="js/document.js" charset="utf-8"></script>
</head>
<body>
  <div class="bit-container">
    <div class="row">
      <a href="index.php" class="btn red lg">Regresar a Inicio</a>
      <button id="blanco" class="btn grey lg">Cambiar a blanco</button>
      <button id="negro" class="btn blue-grey lg">Cambiar a negro</button>
      <div class="bit-col-100">
          <h2 class="text-center">Normal</h2>
          <nav class="breadcrumb">
            <li class="item"><a href="">Texto 1</a></li>
            <li class="item"><a href="">Texto 2</a></li>
            <li class="item"><a href="">Texto 3</a></li>
            <li class="item"><a href="">Texto 4</a></li>
            <li class="item active"><a href="">Texto 5</a></li>
          </nav>
      </div>
      <?php foreach ($colores as $color): ?>
      <div class="bit-col-100">
          <h2 class="text-center"><?php echo $color ?></h2>
          <nav class="breadcrumb <?php echo $color ?>">
            <li class="item"><a href="">Texto 1</a></li>
            <li class="item"><a href="">Texto 2</a></li>
            <li class="item"><a href="">Texto 3</a></li>
            <li class="item"><a href="">Texto 4</a></li>
            <li class="item active"><a href="">Texto 5</a></li>
          </nav>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</body>
</html>
