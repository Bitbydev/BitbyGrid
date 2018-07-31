<?php include "variables.php" ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pruebas BitByGrid - Tarjetas</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bitCore.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="js/document.js" charset="utf-8"></script>
</head>
<body>
  <a href="index.php" class="btn red lg">Regresar a Inicio</a>
  <button id="blanco" class="btn grey lg">Cambiar a blanco</button>
  <button id="negro" class="btn blue-grey lg">Cambiar a negro</button>
  <div class="bit-container">
    <div class="row">
      <div class="bit-col-25">
        <div class="card">
          <div class="header">Este es un encabezado</div>
          <img src="http://placeimg.com/350/350/tech" alt="" class="img">
          <div class="body">
            <h3 class="title">Titulo</h3>
            <h4 class="subtitle">Subtitulo</h4>
            <p>Hola Mundo! Esta es una tarjeta</p>
          </div>
          <div class="footer">Este es un pie de página</div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="bit-col-100">
        <div class="card-group">
          <div class="card teal">
            <div class="header">Este es un encabezado</div>
            <div class="body">
              <h3 class="title">Titulo</h3>
              <h4 class="subtitle">Subtitulo</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="footer">Este es un pie de página</div>
          </div>
          <?php for ($i=0; $i < 4; $i++): ?>
            <div class="card pink-outline">
              <div class="header">Este es un encabezado</div>
              <div class="body">
                <h3 class="title">Titulo</h3>
                <h4 class="subtitle">Subtitulo</h4>
                <p>Hola Mundo! Esta es una tarjeta</p>
              </div>
              <div class="footer">Este es un pie de página</div>
            </div>
          <?php endfor ?>
          <?php for ($i=0; $i < 3; $i++): ?>
            <div class="card blue">
              <div class="header">Este es un encabezado</div>
              <div class="body">
                <h3 class="title">Titulo</h3>
                <h4 class="subtitle">Subtitulo</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <div class="footer">Este es un pie de página</div>
            </div>
          <?php endfor ?>
        </div>
      </div>
    </div>
    <?php foreach ($colores as $color): ?>
    <div class="row">
      <h2><?php echo $color ?></h2>
      <div class="bit-col-25">
        <div class="card <?php echo $color ?>">
          <div class="header">Este es un encabezado</div>
          <div class="body">
            <h3 class="title">Titulo</h3>
            <h4 class="subtitle">Subtitulo</h4>
            <p>Hola Mundo! Esta es una tarjeta</p>
          </div>
          <div class="footer">Este es un pie de página</div>
        </div>
      </div>
      <div class="bit-col-25 bit-col-offset-10">
        <div class="card <?php echo $color ?>-outline">
          <div class="header">Este es un encabezado</div>
          <div class="body">
            <h3 class="title">Titulo</h3>
            <h4 class="subtitle">Subtitulo</h4>
            <p>Hola Mundo! Esta es una tarjeta</p>
          </div>
          <div class="footer">Este es un pie de página</div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
