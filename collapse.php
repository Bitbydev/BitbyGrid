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
        <div class="bit-col-sm-100">
          <div class="list-group teal">
            <a data-target="collapse1" class="item flex align-center justify-between" data-component="collapse">Texto 1 <span class="tag red-dark">5</span></a>
            <div id="collapse1" class="item">Este es mi tab número 1</div>
            <a data-target="collapse2" class="item flex align-center justify-between" data-component="collapse">Texto 2 <span class="tag red">5</span></a>
            <div id="collapse2" class="item">Este es mi tab número 2</div>
            <a data-target="collapse3" class="item flex align-center justify-between" data-component="collapse">Texto 3 <span class="tag red">5</span></a>
            <div id="collapse3" class="item">Este es mi tab número 3</div>
            <a data-target="collapse4" class="item flex align-center justify-between" data-component="collapse">Texto 4 <span class="tag red">5</span></a>
            <div id="collapse4" data-target="collapse6" class="item" data-component="collapse">Este es mi tab número 4</div>
            <div id="collapse6" data-target="collapse7" class="item collapse" data-component="collapse">Este es mi tab número 6</div>
            <div id="collapse7" class="item collapse">Este es mi tab número 7</div>
            <a data-target="collapse5" class="item flex align-center justify-between" data-component="collapse">Texto 5 <span class="tag red">5</span></a>
            <div id="collapse5" class="item">Este es mi tab número 5</div>
          </div>
        </div>
    </div>
  </div>
</body>
</html>
