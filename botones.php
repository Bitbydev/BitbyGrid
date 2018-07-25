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
</head>
<body>
  <div class="bit-container">
      <?php foreach ($colores as $color): ?>
      <div class="bit-col-100">
        <h2><?php echo $color ?></h2>
        <button class="btn btn-<?php echo $color; ?> btn-sm">Hola Mundo!</button>
        <button class="btn btn-<?php echo $color; ?> btn">Hola Mundo!</button>
        <button class="btn btn-<?php echo $color; ?> btn-lg">Hola Mundo!</button>
      </div>
      <?php endforeach; ?>
  </div>
</body>
</html>
