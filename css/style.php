<?php
header("Content-type: text/css");

$color = "#".$_GET["color"];


 ?>

body{
  background-color: <?php echo $color; ?>;
}
