<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BitByGrid Pruebas - Autocompletar</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bitCore.css">

  <script src="js/bitbyGrid.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/document.js" charset="utf-8"></script>
</head>
<body>
  <div class="bit-container">
    <a href="index.php" class="btn red lg">Regresar a Inicio</a>
    <button id="blanco" class="btn grey lg">Cambiar a blanco</button>
    <button id="negro" class="btn blue-grey lg">Cambiar a negro</button>
    <div class="bit-row">
      <div class="bit-col-50">
        <input type="text" class="form-element" id="auto3" data-target="container" data-component="label">
      </div>
    </div>
    <div class="bit-row">
      <div class="bit-col-50" id="container">
      </div>
    </div>
  </div>  
</body>
</html>