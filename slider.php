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
          <div class="prev" data-component="slide-control-prev" data-target="mySlide">
            <button class="btn red-outline">&lt;</button>
          </div>
          <div class="next" data-component="slide-control-next" data-target="mySlide">
            <button class="btn red-outline">&gt;</button>
          </div>
          <div class="content">
            <div class="item">
              <img src="https://picsum.photos/2000/800/?image=0" alt="">
            </div>
            <div class="item">
              <img src="https://picsum.photos/2000/800/?image=1" alt="">
            </div>
            <div class="item">
              <img src="https://picsum.photos/2000/800/?image=2" alt="">
            </div>
            <div class="item">
              <img src="https://picsum.photos/2000/800/?image=3" alt="">
            </div>
            <div class="item">
              <img src="https://picsum.photos/2000/800/?image=4" alt="">
            </div>
          </div>
          <div class="indicators" data-component="slide" data-target="mySlide">
            <a data-option="0" class="item control"></a>
            <a data-option="1" class="item control"></a>
            <a data-option="2" class="item control"></a>
            <a data-option="3" class="item control"></a>
            <a data-option="4" class="item control"></a>
          </div>
        </div>
      </div>
    </div>

    <div class="bit-row">
      <div class="bit-col-100">
        <div class="bit-col-100 slide" id="mySlide2">
          <div class="prev out" data-component="slide-control-prev" data-target="mySlide2">
            <button class="btn red-outline">&lt;</button>
          </div>
          <div class="next out" data-component="slide-control-next" data-target="mySlide2">
            <button class="btn red-outline">&gt;</button>
          </div>
          <div class="content">
            <div class="item">
              <img src="https://picsum.photos/2000/800/?image=7" alt="">
            </div>
            <div class="item">
              <img src="https://picsum.photos/2000/800/?image=8" alt="">
            </div>
            <div class="item">
              <img src="https://picsum.photos/2000/800/?image=9" alt="">
            </div>
            <div class="item">
              <img src="https://picsum.photos/2000/800/?image=6" alt="">
            </div>
            <div class="item">
              <img src="https://picsum.photos/2000/800/?image=5" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
