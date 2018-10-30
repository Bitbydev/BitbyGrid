<?php include "variables.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pruebas BitByGrid - Modales</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bitCore.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="js/bitbyGrid.js" charset="utf-8"></script>
  <script src="js/document.js" charset="utf-8"></script>
</head>
<body>
  <div class="bit-container">
    <a href="index.php" class="btn red lg">Regresar a Inicio</a>
    <button id="blanco" class="btn grey lg">Cambiar a blanco</button>
    <button id="negro" class="btn blue-grey lg">Cambiar a negro</button>
    <div class="bit-row">
      <div class="bit-col-100">
        <button data-modal="modalPrueba" class="btn red lg">Activar Modal</button>
      </div>
    </div>
  </div>
  <div class="modal centered" id="modalPrueba">
    <div class="modal-content lg">
      <div class="header">
        Titulo del Modal
      </div>
      <div class="body">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
      </div>
      <div class="footer">
        <button class="btn blue-grey close" data-dismiss="modal">
          Cerrar
        </button>
        <button class="btn green">
          Envíar
        </button>
      </div>
    </div>
  </div>
</body>
</html>