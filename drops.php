<?php include "variables.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pruebas BitByGrid - Drops</title>
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
    <div class="bit-row">
      <div class="bit-col-25">
        <button class="btn drop down" data-component="drop" data-target="prueba1" data-direction="down">Hola Mundo!</button>
        <div class="drop-menu" id="prueba1">
          <a href="#" class="item">Hola soy un texto</a>
          <a href="#" class="item">Yo también soy un texto</a>
          <a href="#" class="item">Simulo ser un Texto</a>
          <a href="#" class="item">Creo que soy un Texto</a>
          <hr>
          <a href="#" class="item">Texto abandonado</a>
        </div>
      </div>
      <div class="bit-col-25">
        <button class="btn drop up" data-component="drop" data-target="prueba2" data-direction="up">Hola Mundo!</button>
        <div class="drop-menu" id="prueba2">
          <a href="#" class="item">Hola soy un texto</a>
          <a href="#" class="item">Yo también soy un texto</a>
          <a href="#" class="item">Simulo ser un Texto</a>
          <a href="#" class="item">Creo que soy un Texto</a>
          <hr>
          <a href="#" class="item">Texto abandonado</a>
        </div>
      </div>
      <div class="bit-col-25">
        <button class="btn drop left" data-component="drop" data-target="prueba3" data-direction="left">Hola Mundo!</button>
        <div class="drop-menu" id="prueba3">
          <li href="#" class="item">Hola soy un texto</li>
          <li href="#" class="item">Yo también soy un texto</li>
          <li href="#" class="item">Simulo ser un Texto</li>
          <li href="#" class="item">Creo que soy un Texto</li>
          <hr>
          <li href="#" class="item">Texto abandonado</li>
        </div>
      </div>
      <div class="bit-col-25">
        <button class="btn drop right" data-component="drop" data-target="prueba4" data-direction="right">Hola Mundo!</button>
        <div class="drop-menu" id="prueba4">
          <a href="#" class="item">Hola soy un texto</a>
          <a href="#" class="item">Yo también soy un texto</a>
          <a href="#" class="item">Simulo ser un Texto</a>
          <a href="#" class="item">Creo que soy un Texto</a>
          <hr>
          <a href="#" class="item">Texto abandonado</a>
        </div>
      </div>
    </div>
    <?php foreach ($colores as $color) : ?>
    <h2><?php echo $color ?></h2>
    <div class="bit-row">
      <div class="bit-col-15">
        <button class="btn drop down <?php echo $color ?>" data-component="drop" data-target="prueba1<?php echo $color?>" data-direction="down">Hola Mundo!</button>
        <div class="drop-menu <?php echo $color ?>" id="prueba1<?php echo $color ?>">
          <a href="#" class="item">Hola soy un texto</a>
          <a href="#" class="item">Yo también soy un texto</a>
          <a href="#" class="item">Simulo ser un Texto</a>
          <a href="#" class="item">Creo que soy un Texto</a>
          <hr>
          <a href="#" class="item">Texto abandonado</a>
        </div>
      </div>
      <div class="bit-col-15">
        <button class="btn drop up <?php echo $color ?>" data-component="drop" data-target="prueba2<?php echo $color ?>" data-direction="up">Hola Mundo!</button>
        <div class="drop-menu <?php echo $color ?>" id="prueba2<?php echo $color ?>">
          <a href="#" class="item">Hola soy un texto</a>
          <a href="#" class="item">Yo también soy un texto</a>
          <a href="#" class="item">Simulo ser un Texto</a>
          <a href="#" class="item">Creo que soy un Texto</a>
          <hr>
          <a href="#" class="item">Texto abandonado</a>
        </div>
      </div>
      <div class="bit-col-15">
        <button class="btn drop left <?php echo $color ?>" data-component="drop" data-target="prueba3<?php echo $color ?>" data-direction="left">Hola Mundo!</button>
        <div class="drop-menu <?php echo $color ?>" id="prueba3<?php echo $color ?>">
          <li href="#" class="item">Hola soy un texto</li>
          <li href="#" class="item">Yo también soy un texto</li>
          <li href="#" class="item">Simulo ser un Texto</li>
          <li href="#" class="item">Creo que soy un Texto</li>
          <hr>
          <li href="#" class="item">Texto abandonado</li>
        </div>
      </div>
      <div class="bit-col-15">
        <button class="btn drop right <?php echo $color ?>" data-component="drop" data-target="prueba4<?php echo $color ?>" data-direction="right">Hola Mundo!</button>
        <div class="drop-menu <?php echo $color ?>" id="prueba4<?php echo $color ?>">
          <a href="#" class="item">Hola soy un texto</a>
          <a href="#" class="item">Yo también soy un texto</a>
          <a href="#" class="item">Simulo ser un Texto</a>
          <a href="#" class="item">Creo que soy un Texto</a>
          <hr>
          <a href="#" class="item">Texto abandonado</a>
        </div>
      </div>
      <div class="bit-col-15">
        <div class="btn-group">
          <button class="btn <?php echo $color ?>">Hola Mundo</button>
          <button class="btn drop right <?php echo $color ?> only" data-component="drop" data-target="prueba4<?php echo $color ?>"></button>
        </div>
          <div class="drop-menu <?php echo $color ?>" id="prueba5<?php echo $color ?>">
            <a href="#" class="item">Hola soy un texto</a>
            <a href="#" class="item">Yo también soy un texto</a>
            <a href="#" class="item">Simulo ser un Texto</a>
            <a href="#" class="item">Creo que soy un Texto</a>
            <hr>
            <a href="#" class="item">Texto abandonado</a>
          </div>
      </div>
    </div><h2><?php echo $color ?> bordered</h2>
    <div class="bit-row">
      <div class="bit-col-25">
        <button class="btn drop down <?php echo $color ?>" data-component="drop" data-target="prueba1<?php echo $color ?>b">Hola Mundo!</button>
        <div class="drop-menu bordered <?php echo $color ?>" id="prueba1<?php echo $color ?>b">
          <a href="#" class="item">Hola soy un texto</a>
          <a href="#" class="item">Yo también soy un texto</a>
          <a href="#" class="item">Simulo ser un Texto</a>
          <a href="#" class="item">Creo que soy un Texto</a>
          <hr>
          <a href="#" class="item">Texto abandonado</a>
        </div>
      </div>
      <div class="bit-col-25">
        <button class="btn drop up <?php echo $color ?>" data-component="drop" data-target="prueba2<?php echo $color ?>b">Hola Mundo!</button>
        <div class="drop-menu bordered <?php echo $color ?>" id="prueba2<?php echo $color ?>b">
          <a href="#" class="item">Hola soy un texto</a>
          <a href="#" class="item">Yo también soy un texto</a>
          <a href="#" class="item">Simulo ser un Texto</a>
          <a href="#" class="item">Creo que soy un Texto</a>
          <hr>
          <a href="#" class="item">Texto abandonado</a>
        </div>
      </div>
      <div class="bit-col-25">
        <button class="btn drop left <?php echo $color ?>" data-component="drop" data-target="prueba3<?php echo $color ?>b">Hola Mundo!</button>
        <div class="drop-menu bordered <?php echo $color ?>" id="prueba3<?php echo $color ?>b">
          <li href="#" class="item">Hola soy un texto</li>
          <li href="#" class="item">Yo también soy un texto</li>
          <li href="#" class="item">Simulo ser un Texto</li>
          <li href="#" class="item">Creo que soy un Texto</li>
          <hr>
          <li href="#" class="item">Texto abandonado</li>
        </div>
      </div>
      <div class="bit-col-25">
        <button class="btn drop right <?php echo $color ?>" data-component="drop" data-target="prueba4<?php echo $color ?>b">Hola Mundo!</button>
        <div class="drop-menu bordered <?php echo $color ?>" id="prueba4<?php echo $color ?>b">
          <a href="#" class="item">Hola soy un texto</a>
          <a href="#" class="item">Yo también soy un texto</a>
          <a href="#" class="item">Simulo ser un Texto</a>
          <a href="#" class="item">Creo que soy un Texto</a>
          <hr>
          <a href="#" class="item">Texto abandonado</a>
        </div>
      </div>
    </div>
    <?php endforeach ?>
  </div>
</body>
</html>

  <script src="js/bitbyGrid.js" charset="utf-8"></script>