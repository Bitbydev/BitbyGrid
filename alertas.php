<?php include "variables.php" ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BitByGrid Pruebas - Alertas</title>
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
    <?php foreach ($colores as $color): ?>
      <div class="row">
        <div class="bit-col-100">
          <h2><?php echo $color ?></h2>
          <div class="alert <?php echo $color ?>">Hola esta es una prueba de alerta y un <a href="#" class="link">link</a></div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
