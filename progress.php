<?php include "variables.php" ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Pruebas BitByGrid - Progress</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bitCore.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="js/document.js" charset="utf-8"></script>
</head>
<body>
    <a href="index.php" class="btn red lg">Regresar a Inicio</a>
    <button id="blanco" class="btn grey lg">Cambiar a blanco</button>
    <button id="negro" class="btn blue-grey lg">Cambiar a negro</button>
	<div class="bit-container">
		<div class="row">
			<div class="bit-col-100">
				<div class="progress">
					<div class="bar" style="width: 75%"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="bit-col-100">
				<div class="progress">
					<div class="bar striped" style="width: 75%"></div>
				</div>
			</div>
		</div>
		<?php foreach ($colores as $color): ?>
		<div class="row">
			<div class="bit-col-100">
				<div class="progress">
					<div class="bar <?php echo $color ?>" style="width: 75%"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="bit-col-100">
				<div class="progress">
					<div class="bar striped <?php echo $color ?>" style="width: 75%"></div>
				</div>
			</div>
		</div>
		<?php endforeach ?>
	</div>
</body>
</html>