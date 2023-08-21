<?php
	// variables constantes globales, al inicio del index
	//define ('MICONSTANTEGLOBAL','Hola');
	// las variables constantes globales están en configuracion.php
	include_once('configuracion.php');

	// isset para verificar la existencia de una variable, con GET o POST
	// crear if, una línea de código (condición)?verdadero:falso
	// null = vacio o no tiene nada 
	$accion= (isset($_POST['accion']))?$_POST['accion']:null;
	$accion= (isset($_GET['accion']))?$_GET['accion']:$accion;
	
	// para concatenar en php es con "."
	echo"accion tiene el valor de: ".$accion;
	
	if(isset($_SESSION['user_session']))
	{
		// Para verificar el ID del usuario que inició sesión 
		print_r($_SESSION);
		
		// Este es el inicio de mi código de mi aplicación web
		include_once("header.php");
		
		switch($accion)
		{
			case"practica01":
			include_once("Practicas/practica01.php");
			break;
			
			case"practica02":
			include_once("Practicas/practica02.php");
			break;
			
			case"practica04":
			include_once("Practicas/practica04.php");
			break;
			
			case"practica05":
			include_once("Practicas/practica05.php");
			break;
			
			case"listAlumnos":
			include_once("Alumnos/listAlumnos.php");
			break;
			
			case"deleteAlumno":
			include_once("Alumnos/deleteAlumno.php");
			break;
			
			case"addAlumno":
			include_once("Alumnos/formAlumno.php");
			break;
			
			case"editAlumno":
			include_once("Alumnos/formEditAlumno.php");
			break;
			
			case"listLibros":
			include_once("Libros/listLibros.php");
			break;
			
			case"deleteLibro":
			include_once("Libros/deleteLibro.php");
			break;
			
			case"addLibro":
			include_once("Libros/addLibro.php");
			break;
			
			case"listPrestamos":
			include_once("Prestamos/listPrestamos.php");
			break;
			
			case"devolverPrestamo":
			include_once("Prestamos/devolverLibroPrestamo.php");
			break;
			
			case"addPrestamo":
			include_once("Prestamos/formPrestamos.php");
			break;
			
			default:
				// Este es el archivo de inicio de mi aplicación web
				include_once("home.php");
			break;
		}
		//Este es el pie de página de mi aplicación web
		include_once("footer.php");
	} else 
	{
		include_once("Login/formLogin.php");
	}
?>