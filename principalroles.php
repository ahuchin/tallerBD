<?php
session_start();
$username=$_SESSION["username"];
$tipoUsuario=$_SESSION["tipoUsuario"];
require_once 'funcionMenu.php'; 

echo $username;
echo "</br>";
echo $tipoUsuario;
//obtener el tipo de menu
$menu =tipoMenu($tipoUsuario);
$mensajeBienvenida=mensajeBienvenida($tipoUsuario);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema Principal</title>
</head>
<body>
<h1><?php  echo $mensajeBienvenida; ?></h1>
<h2> Opciones: </h2>
<?php
echo $menu; 
 ?>
</body>
</html>