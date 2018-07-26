<?php include "variables.php" ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bitCore.css">
</head>
<body>
  <div class="bit-container">
    <a href="index.php" class="btn btn-red btn-lg">Regresar a Inicio</a>
    <?php foreach ($colores as $color): ?>
      <div class="row">
        <div class="bit-col-100">
          <a class="badge badge-<?php echo $color ?>">Hola Mundo!</a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
