<?php
//names del form->> nombreAlumno ApPaterno  ApMaterno



$nombreAlumno=$_POST["nombreAlumno"];
$ApPaterno=$_POST["ApPaterno"];
$ApMaterno=$_POST["ApMaterno"];

echo $nombreAlumno; 
echo $ApPaterno; 
echo $ApMaterno;


   // Dirección o IP del servidor MySQL
      $host = "localhost";
 
      // Puerto del servidor MySQL
      $puerto = "3306";
 
      // Nombre de usuario del servidor MySQL
      $usuario = "root";
 
      // Contraseña del usuario
      $contrasena = "";
 
      // Nombre de la base de datos
      $baseDeDatos ="tallerbd";
 
      // Nombre de la tabla a trabajar
      $tabla = "alumnos";
 
      function Conectarse()
      {
         global $host, $puerto, $usuario, $contrasena, $baseDeDatos, $tabla;
 
         if (!($link = mysqli_connect($host.":".$puerto, $usuario, $contrasena))) 
         { 
            echo "Error conectando a la base de datos.<br>"; 
            exit(); 
            }
         else
         {
            echo "Listo, estamos conectados.<br>";
         }
         if (!mysqli_select_db($link, $baseDeDatos)) 
         { 
            echo "Error seleccionando la base de datos.<br>"; 
            exit(); 
         }
         else
         {
            echo "Obtuvimos la base de datos $baseDeDatos sin problema.<br>";
         }
      return $link; 
      } 
 
     $link = Conectarse(); 
 	
 	$query="INSERT INTO alumnos (nombre,apellidoPaterno,apellidoMaterno) VALUES('$nombreAlumno','$ApPaterno','$ApMaterno')";
 	 $result = mysqli_query($link, $query); 

/** CON UN IF SE VA VERIFICAR SI LA 
CONSULTA $result   SE REALIZO Y REDIRECCIONAREMOS

**/
# !=null <-- nos permite hacer negativa una condicion 
if ($result !=null) {
	# se realizo la consulta
	# que se va hcer ahora?
	# \ slash invertido para hacer Escape de las comillas

	
	print("<script> alert(\"Registro Exitoso\");
		window.location='consulta.php';</script>");

}else{
	print("<script> alert(\"No se guardo\");
		window.location='insertaPricipal.php';</script>");

}

 
?>