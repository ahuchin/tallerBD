<?php
require_once 'conexionMysql.php';

$usernameLogin=$_POST["username"];
$clave =$_POST["clave"];
$claveCifrada=md5($clave);


$link=Conectarse();

$queryUsuario="SELECT * FROM usuarios WHERE username='$usernameLogin' AND clave='$claveCifrada'  ";
$result=mysqli_query($link,$queryUsuario);

while ($row=mysqli_fetch_array($result)) {
	$username=$row["username"];
	$clave=$row["clave"]; 

}
echo $username;
echo "<br>";

if ($username !=null) {
	// que existe el usuario
		
	print("<script> 
		window.location='principal.php';</script>");

}else{
  //no existe el usuario 
	print("<script> 
		window.location='login.php?ban=1';</script>");
}





?>

