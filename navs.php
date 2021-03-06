<?php include "variables.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pruebas BitByGrid - Navs</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bitCore.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="js/document.js" charset="utf-8"></script>
</head>
<body>
  <div class="bit-container">
    <div class="bit-row">
      <a href="index.php" class="btn red lg">Regresar a Inicio</a>
      <button id="blanco" class="btn grey lg">Cambiar a blanco</button>
      <button id="negro" class="btn blue-grey lg">Cambiar a negro</button>
      <h2>Normal</h2>
      <div class="bit-col-100">
        <nav class="nav fill">
          <a href="#" class="item active">Texto 1</a>
          <a href="#" class="item">Texto 2</a>
          <a href="#" class="item">Texto 3</a>
          <a href="#" class="item">Texto 4</a>
          <a href="#" class="item">Texto 5</a>
        </nav>
      </div>
      <div class="bit-col-100">
        <nav class="nav fill tabs">
          <a href="#" class="item active">Texto 1</a>
          <a href="#" class="item">Texto 2</a>
          <a href="#" class="item">Texto 3</a>
          <a href="#" class="item">Texto 4</a>
          <a href="#" class="item">Texto 5</a>
        </nav>
      </div>
      <div class="bit-col-100">
        <nav class="nav fill pills">
          <a href="#" class="item active">Texto 1</a>
          <a href="#" class="item">Texto 2</a>
          <a href="#" class="item">Texto 3</a>
          <a href="#" class="item">Texto 4</a>
          <a href="#" class="item">Texto 5</a>
        </nav>
      </div>
    </div>
    <?php foreach ($colores as $color): ?>
      <?php if ($color != ''): ?>
        <div class="bit-row">
          <h2><?php echo $color ?></h2>
          <div class="bit-col-100">
            <nav class="nav fill nav-<?php echo $color ?>">
              <a href="#" class="item active">Texto 1</a>
              <a href="#" class="item">Texto 2</a>
              <a href="#" class="item">Texto 3</a>
              <a href="#" class="item">Texto 4</a>
              <a href="#" class="item">Texto 5</a>
            </nav>
          </div>
          <div class="bit-col-100">
            <nav class="nav fill tabs <?php echo $color ?>">
              <a href="#" class="item active">Texto 1</a>
              <a href="#" class="item">Texto 2</a>
              <a href="#" class="item">Texto 3</a>
              <a href="#" class="item">Texto 4</a>
              <a href="#" class="item">Texto 5</a>
            </nav>
          </div>
          <div class="bit-col-100">
            <nav class="nav fill pills <?php echo $color ?>">
              <a href="#" class="item active">Texto 1</a>
              <a href="#" class="item">Texto 2</a>
              <a href="#" class="item">Texto 3</a>
              <a href="#" class="item">Texto 4</a>
              <a href="#" class="item">Texto 5</a>
            </nav>
          </div>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</body>
</html>
