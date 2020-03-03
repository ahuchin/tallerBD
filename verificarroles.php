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
	$tipoUsuario=$row["tipoUsuario"];

}

/*echo $username;
echo "<br>";
echo $tipoUsuario;
echo "<br>";
exit();*/ 

if ($username !=null) {
	// que existe el usuario
		session_start();
		$_SESSION["username"]=$username;
		$_SESSION["tipoUsuario"]=$tipoUsuario;

	print("<script> 
		window.location='principalroles.php';</script>");

}else{
  //no existe el usuario 
	print("<script> 
		window.location='loginroles.php?ban=1';</script>");
}





?>

