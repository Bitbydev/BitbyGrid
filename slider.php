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
        <div class="bit-col-100 slide" id="mySlide">
          <div class="prev">
            <span class="btn blue-grey">&lt;</span>
          </div>
          <div class="next">
            <span class="btn blue-grey">&gt;</span>
          </div>
          <div class="content">
            <div class="item bg-teal">
              <p>Este es mi slide Numero 1</p>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel, fuga optio! Non, adipisci cupiditate quia unde hic possimus eaque soluta libero animi dolor aliquid a autem officiis? Alias, perferendis! Et.</p>
            </div>
            <div class="item bg-red">
              <p>Este es mi slide Numero 2</p>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel, fuga optio! Non, adipisci cupiditate quia unde hic possimus eaque soluta libero animi dolor aliquid a autem officiis? Alias, perferendis! Et.</p>
            </div>
            <div class="item bg-grey">
              <p>Este es mi slide Numero 3</p>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel, fuga optio! Non, adipisci cupiditate quia unde hic possimus eaque soluta libero animi dolor aliquid a autem officiis? Alias, perferendis! Et.</p>
            </div>
            <div class="item bg-green">
              <p>Este es mi slide Numero 4</p>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel, fuga optio! Non, adipisci cupiditate quia unde hic possimus eaque soluta libero animi dolor aliquid a autem officiis? Alias, perferendis! Et.</p>
            </div>
            <div class="item bg-blue">
              <p>Este es mi slide Numero 5</p>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel, fuga optio! Non, adipisci cupiditate quia unde hic possimus eaque soluta libero animi dolor aliquid a autem officiis? Alias, perferendis! Et.</p>
            </div>
          </div>
          <div class="indicators circle" data-component="slide" data-target="mySlide">
            <a data-option="0" class="item control active"></a>
            <a data-option="1" class="item control"></a>
            <a data-option="2" class="item control active"></a>
            <a data-option="3" class="item control"></a>
            <a data-option="4" class="item control active"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
