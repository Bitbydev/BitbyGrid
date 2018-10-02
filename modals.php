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
  <script src="js/document.js" charset="utf-8"></script>
</head>
<body>
  <div class="bit-container">
    <?php $prev = "default"; ?>
    <?php foreach ($colores as $color) : ?>
    <div class="bit-col-100">
      <div class="modal centered">
        <div class="modal-content lg <?php echo $color ?> ">
          <div class="header">
            Titulo del Modal
          </div>
          <div class="body">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          </div>
          <div class="footer">
            <button class="btn blue-grey">
              Cerrar
            </button>
            <button class="btn <?php echo $prev; ?> ">
              Envíar
            </button>
          </div>
        </div>
      </div>
    </div>
    <?php $prev = $color; ?>
    <?php endforeach; ?>
  </div>
</body>
</html>