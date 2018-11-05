<?php include "variables.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pruebas BitByGrid - Tabs</title>
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
        <nav class="nav fill tabs" data-direction="vertical">
          <a href="#" data-tab="myTab" data-option="0" class="tab-control item active">Texto 1</a>
          <a href="#" data-tab="myTab" data-option="1" class="tab-control item">Texto 2</a>
          <a href="#" data-tab="myTab" data-option="2" class="tab-control item">Texto 3</a>
          <a href="#" data-tab="myTab" data-option="3" class="tab-control item">Texto 4</a>
          <a href="#" data-tab="myTab" data-option="4" class="tab-control item">Texto 5</a>
        </nav>
        <div class="tab-container" style="width:100%; overflow:hidden; height:100px; background-color:red;" id="myTab">
          <div class="tab-item">Este es mi tab número 1</div>
          <div class="tab-item">Este es mi tab número 2</div>
          <div class="tab-item">Este es mi tab número 3</div>
          <div class="tab-item">Este es mi tab número 4</div>
          <div class="tab-item">Este es mi tab número 5</div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>