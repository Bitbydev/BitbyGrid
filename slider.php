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
    </div>
    <div class="bit-row">
      <div class="bit-col-100">
        <div class="btn-group" data-component="slide" data-target="mySlide">
          <a data-option="0" class="btn red control item active">1</a>
          <a data-option="1" class="btn red control item">2</a>
          <a data-option="2" class="btn red control item active">3</a>
          <a data-option="3" class="btn red control item">4</a>
          <a data-option="4" class="btn red control item active">5</a>
        </div>
        <div class="bit-col-100 tab" id="mySlide">
          <div class="content">
            <div class="item bg-teal"><p>Este es mi slide Numero 1</p></div>
            <div class="item bg-red"><p>Este es mi slide Numero 2</p></div>
            <div class="item bg-grey"><p>Este es mi slide Numero 3</p></div>
            <div class="item bg-green"><p>Este es mi slide Numero 4</p></div>
            <div class="item bg-blue"><p>Este es mi slide Numero 5</p></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
