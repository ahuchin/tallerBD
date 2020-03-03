<!DOCTYPE html>
<html>
<head>
	<title>Conexion a BD</title>
</head>
<body>
<?php
$host="localhost";
$puerto="3306";
$usuario="usertallerbd"; 
$password="xyz";
$baseDeDatos="tallerbd";
$tabla="alumnos"; 

function Conectarse(){
	global $host, $puerto, $usuario, $password, $baseDeDatos, $tabla; 
	/* El simnbolo de ! sirve para negar la condicion*/
	//Conexion a BD
	if (!($link=mysqli_connect($host.":".$puerto, $usuario, $password)))
	 { echo "Error en la conexion de BD"; 
		echo "</br>"; 
		exit();
	}else
	{
		echo "Conexion a BD $baseDeDatos Exitosa";
	}
	//Verificar Seleccion BD
 if ( !mysqli_select_db($link, $baseDeDatos)) {
 	echo ("Error seleccionando la BD");
 	echo "</br>"; 
 } else {
 	 echo "Se conecto a la BD  $baseDeDatos sin problemas";
 }
 
	return $link; 
}
//Como llamar a la funcion de Conectarse
$link=Conectarse(); 
mysqli_close($link); 

?>
</body>
</html>