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
</head>
<body>
  <div class="bit-container">
    <div class="row">
      <a href="index.php" class="btn btn-red btn-lg">Regresar a Inicio</a>
      <div class="bit-col-100">
          <p class="text-center">Normal</p>
          <nav class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Texto 1</a></li>
            <li class="breadcrumb-item"><a href="">Texto 2</a></li>
            <li class="breadcrumb-item"><a href="">Texto 3</a></li>
            <li class="breadcrumb-item"><a href="">Texto 4</a></li>
            <li class="breadcrumb-item active"><a href="">Texto 5</a></li>
          </nav>
      </div>
      <?php foreach ($colores as $color): ?>
      <div class="bit-col-100">
          <p class="text-center"><?php echo $color ?></p>
          <nav class="breadcrumb breadcrumb-<?php echo $color ?>">
            <li class="breadcrumb-item"><a href="">Texto 1</a></li>
            <li class="breadcrumb-item"><a href="">Texto 2</a></li>
            <li class="breadcrumb-item"><a href="">Texto 3</a></li>
            <li class="breadcrumb-item"><a href="">Texto 4</a></li>
            <li class="breadcrumb-item active"><a href="">Texto 5</a></li>
          </nav>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</body>
</html>
