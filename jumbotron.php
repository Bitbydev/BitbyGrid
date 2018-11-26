<?php include "variables.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BitByGrid Pruebas - Jumbotron</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bitCore.css">
  <script src="js/jquery.js"></script>
  <script src="js/document.js" charset="utf-8"></script>
</head>
<body>
    <a href="index.php" class="btn red lg">Regresar a Inicio</a>
    <button id="blanco" class="btn grey lg">Cambiar a blanco</button>
    <button id="negro" class="btn blue-grey lg">Cambiar a negro</button>
    <div class="bit-container">
			<div class="bit-row">
				<div class="bit-col-100">
					<div class="jumbotron">
						<h1>Hola Mundo!</h1>
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum laboriosam aspernatur debitis possimus, sapiente nobis eveniet.</p>
					</div>
				</div>
			</div>
			<?php foreach ($colores as $color): ?>
			<div class="bit-row">
				<div class="bit-col-100">
					<div class="jumbotron <?php echo $color?>">
						<h1>Hola Mundo!</h1>
						<hr>
						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut corporis molestias blanditiis ab reiciendis commodi fugiat earum asperiores autem doloribus, vitae cumque quis quasi voluptas, consequatur eius sequi magni placeat.</p>
						<button class="btn <?php echo $color; ?> xl">Da click!</button>
					</div>
				</div>
			</div>
			<?php endforeach ?>
		</div>
</body>
</html>