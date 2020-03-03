<?php
$numero= $_POST["numero"];
$precio= $_POST["precio"]; 

echo $numero; 
echo '</br>';
echo $precio; 

$precioTotal= $numero*$precio; 

echo '</br>';
echo date("Y-m-d H:i:s");


?>