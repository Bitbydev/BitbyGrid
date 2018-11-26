<?php include "variables.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pruebas BitByGrid - Slider</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bitCore.css">
  
  <script src="js/jquery.js"></script>
  <script src="js/document.js" charset="utf-8"></script> 
  <script src="js/bitbyGrid.js" charset="utf-8"></script> 
</head>
<body>
  <div class="bit-container">
    <div class="bit-row">
      <a href="index.php" class="btn red lg">Regresar a Inicio</a>
      <button id="blanco" class="btn grey lg">Cambiar a blanco</button>
      <button id="negro" class="btn blue-grey lg">Cambiar a negro</button>
      <div class="bit-col-100">
        <div class="slider bit-col-100" id="mySlider">
          <div class="content">
            <div style="height:500px;" class="item bg-red">Este es mi tab número 1</div>
            <div style="height:500px;" class="item bg-blue">Este es mi tab número 2</div>
            <div style="height:500px;" class="item bg-teal">Este es mi tab número 3</div>
            <div style="height:500px;" class="item bg-yellow">Este es mi tab número 4</div>
            <div style="height:500px;" class="item bg-green">Este es mi tab número 5</div>

            <div class="btn-group controls" data-component="slide" data-target="mySlider">
              <button data-option="0" class="control btn red">1</button>
              <button data-option="1" class="control btn blue">2</button>
              <button data-option="2" class="control btn teal">3</button>
              <button data-option="3" class="control btn yellow">4</button>
              <button data-option="4" class="control btn green">5</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
