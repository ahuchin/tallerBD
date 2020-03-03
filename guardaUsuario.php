<?php
require_once 'conexionMysql.php';

$username=$_POST["username"];
$clave= $_POST["clave"];

$claveCifrada=md5($clave);
//1.- conectarme a libreria mysql
$link=Conectarse(); 

// 2.- Crear una consulta
$query="INSERT INTO usuarios (username,clave) VALUES ('$username','$claveCifrada') ";
//3 verificar si el query funciona en phpMyadmin
//echo $query; 
//exit();

//4 Ejecutar la consulta
$result=mysqli_query($link,$query); 

// verificacion 

if ($result !=null) {
	# se realizo la consulta
	# que se va hcer ahora?
	# \ slash invertido para hacer Escape de las comillas

	
	print("<script> alert(\"Registro Exitoso\");
		window.location='login.php';</script>");

}else{
	print("<script> alert(\"No se guardo\");
		window.location='registroUsuario.php';</script>");

}


?>