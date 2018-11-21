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
    </div>
    <div class="bit-row">
      <div class="bit-col-100">
        <nav class="nav fill tabs teal" data-component="tab" data-target="myTab">
          <a data-option="0" class="control item active">Texto 1</a>
          <a data-option="1" class="control item">Texto 2</a>
          <a data-option="2" class="control item active">Texto 3</a>
          <a data-option="3" class="control item">Texto 4</a>
          <a data-option="4" class="control item active">Texto 5</a>
        </nav>
        <div class="bit-col-100 tab" id="myTab">
          <div class="content">
            <div class="item" style="height: 100px"><p>Este es mi tab Numero 0</p></div>
            <div class="item" style="height: 200px"><p>Este es mi tab Numero 1</p></div>
            <div class="item" style="height: 300px"><p>Este es mi tab Numero 2</p></div>
            <div class="item" style="height: 400px"><p>Este es mi tab Numero 3</p></div>
            <div class="item" style="height: 500px"><p>Este es mi tab Numero 4</p></div>
          </div>
        </div>
      </div>
      <div class="bit-col-50">
        <nav class="nav fill pills red" data-component="tab" data-target="myTab1">
          <p data-option="0" class="control item">Opción 1</p>
          <p data-option="1" class="control item">Opción 2</p>
          <p data-option="2" class="control item">Opción 3</p>
          <p data-option="3" class="control item">Opción 4</p>
          <p data-option="4" class="control item">Opción 5</p>
        </nav>
      </div>
      <div class="bit-col-50 tab" id="myTab1">
        <div class="content">
          <div class="item bg-red">Hola mundo este es un tab numero 1</div>
          <div class="item bg-teal">Hola mundo este es un tab numero 2</div>
          <div class="item bg-blue">Hola mundo este es un tab numero 3</div>
          <div class="item bg-orange">Hola mundo este es un tab numero 4</div>
          <div class="item bg-purple">Hola mundo este es un tab numero 5</div>
        </div>
      </div>
    </div>
  </div> 
</body>
</html>
