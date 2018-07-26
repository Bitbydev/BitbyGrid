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
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="js/document.js" charset="utf-8"></script>
</head>
<body>
  <div class="bit-container">
    <a href="index.php" class="btn btn-red btn-lg">Regresar a Inicio</a>
    <button id="blanco" class="btn btn-light btn-lg">Cambiar a blanco</button>
    <button id="negro" class="btn btn-dark btn-lg">Cambiar a negro</button>
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
