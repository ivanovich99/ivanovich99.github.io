<?php
	// nombre de página web
	if($_SERVER['SERVER_NAME']=='localhost' || $_SERVER['SERVER_NAME']== '127.0.0.1')
	{
		define('MICONSTANTEGLOBAL',' Hola');
		
		define ('ROOTURL', 'http://localhost/03_Avila/');
		define ('AUTOR','Avila Chiu Oscar Ivanovich');
		define ('DOCROOT', $_SERVER['DOCUMENT_ROOT'].'/03_Avila/');
		define ('SITENAME','Mis aplicaciones web 4DM');

		define ('IMAGES', ROOTURL.'images/');
		define ('CSS', ROOTURL.'css/');
		define ('JS', ROOTURL.'js/');
		
		define ('DBHOST', 'localhost');//nombre de nuestro servidor, administrador de bases de datos
		define ('DBUSER', 'root');//nombre de usuario para accesar
		define ('DBPASSWD', '');//es la contraseña para accesar a la base de datos
		define ('DBNAME', 'bibliotecacetis58_4dm'); 

		define('HEADERADMIN', DOCROOT. 'header.php');
		define('FOOTERADMIN', DOCROOT. 'footer.php');
	}
	include_once('funciones.php');
	session_start(); // Se indica que se utilizarán variables de tipo sesión o cookies 
?>