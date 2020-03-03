   <html> 
      <head>
         <title>Ejemplo de ingreso de datos en base de datos MySQL</title>
      </head> 
 
      <body>
 
      <?php
 
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
 
      if($_POST)
      {
         $queryInsert = "INSERT INTO $tabla (nombre, apellidoPaterno) VALUES ('".$_POST['nombreForm']."', '".$_POST['apellidoPaternoForm']."');";
 
 echo $queryInsert;

 
         $resultInsert = mysqli_query($link, $queryInsert); 
 
         if($resultInsert)
         {
            echo "<strong>Se ingresaron los registros con exito</strong>. <br>";
         }
         else
         {
            echo "No se ingresaron los registros. <br>";
         }
 
      }
 
      $query = "SELECT nombre, apellidoPaterno FROM $tabla;";
 
      $result = mysqli_query($link, $query); 
 
      ?>
 
      <table>
         <tr>
            <td>Nombre</td>
            <td>Apellido Paterno</td>
         <tr>
 
      <?php
 
      while($row = mysqli_fetch_array($result))
      { 
         echo "<tr>";
         echo "<td>";
         echo $row["nombre"];
         echo "</td>";
         echo "<td>";
         echo $row["apellidoPaterno"];
         echo "</td>";
         echo "</tr>";
 
      } 
 
      mysqli_free_result($result); 
 
        mysqli_close($link);
 
      ?>
 
      </table>
      <hr>
      <form action="insercion.php" method="post">
         Nombre: <input type="text" name="nombreForm"> <br> <br>
         Apellidos: <input type="text" name="apellidoPaternoForm"> <br> <br>
         <input type="submit" value="Guardar">
      </form>
 
      </body> 
      </html>