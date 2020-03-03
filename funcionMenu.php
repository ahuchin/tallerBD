<?php 

function tipoMenu($tipoUsuario){

switch ($tipoUsuario) {
	case '1':
		$nombreUsuario='Administrador';			
		$mensajeBienvenida= 'Bienvenido Administrador';
		$menu='<a href="opcion1.php"> -- Modulo Administrador--  </a>
		<a href="opcion1.php"> -- Opcion 1--  </a> 
		<a href="opcion1.php"> -- Opcion 2--  </a> 
		<a href="opcion1.php"> -- Opcion 3--  </a> 
		<a href="opcion1.php"> -- Opcion 4--  </a>  ';
		break;
	case '2':
		$nombreUsuario= 'Empleado ITSH';	
		 $mensajeBienvenida= 'Bienvenido al Sistema';
		 	$menu='	<a href="opcion1.php"> -- Opcion 1--  </a> 
		<a href="opcion1.php"> -- Opcion 2--  </a> 
		<a href="opcion1.php"> -- Opcion 3--  </a> 
		<a href="opcion1.php"> -- Opcion 4--  </a>  ';
		break;
	case '3':
		$nombreUsuario='Alumno';
		 $mensajeBienvenida= 'Bienvenido Alumno solo puede consultar';
		 	$menu='<a href="consultarPrestamos.php"> -- Consultar tus Prestamos--  </a> ';
		break;
	default:
		 $mensajeBienvenida='Error sin rol de usuario contacte al Administrador';
		break;
}
return $menu; 
}

function mensajeBienvenida($tipoUsuario){

switch ($tipoUsuario) {
	case '1':
		$nombreUsuario='Administrador';			
		$mensajeBienvenida= 'Bienvenido Administrador';
	
		break;
	case '2':
		$nombreUsuario= 'Empleado ITSH';	
		 $mensajeBienvenida= 'Bienvenido al Sistema';
	
		break;
	case '3':
		$nombreUsuario='Alumno';
		 $mensajeBienvenida= 'Bienvenido Alumno solo puede consultar';
	
		break;
	default:
		 $mensajeBienvenida='Error sin rol de usuario contacte al Administrador';
		break;
}
return $mensajeBienvenida; 
}


?>