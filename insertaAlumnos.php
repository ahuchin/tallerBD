    <html> 
   <head>
      <title>Ejemplo de selección de datos en base de datos MySQL</title>
   </head> 
 
    <body>
 
     <?php
 
 $nombreAlumno=$_POST["nombreAlumno"];
 $apellidoPaterno=$_POST["apellidoPaterno"];
 echo $nombreAlumno; 
 echo "</br>";
 echo $apellidoPaterno; 
 exit(); 


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
 
   $query = "SELECT nombre, apellidoPaterno FROM $tabla;";
   echo $query; 

 
    $result = mysqli_query($link, $query); 
 
   ?>
 
    <table>
     <tr>
        <td>Nombre</td>
       <td>Apellidos</td>
      <tr>
 
    <?php
 
   while($row = mysqli_fetch_array($result))
   { 
 
      printf("<tr><td>%s</td><td>%s</td></tr>", $row["nombre"],$row["apellidoPaterno"]); 
 
    } 
 
    mysqli_free_result($result); 
 
   mysqli_close($link);
 
 
    ?>
 
    </table> 
    <hr>
    <!-- Action es el archivo que va recibir la informacion 
    enviadada por el formulario 

    Metodo es el metodo de Envio del Formulario 
    POST envia datos en segundo plano de forma oculta 
    GET los envia a travez de la URL   -->

    <form action="insertaAlumnos.php" method="POST">
    <!-- Indicar los elemento del formulario es IMPORTANTE
      QUE TODOS LOS ELEMENTOS TENGAN EL ATRIBUTO NAME-->
        Nombre <input type="text" name="nombreAlumno">
        Apellido Paterno <input type="text" name="apellidoPaterno">
        <input type="submit" value="Guardar">

    </form>
   </body> 
    </html>