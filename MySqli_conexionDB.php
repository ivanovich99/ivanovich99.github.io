<?php
	 //Librerias o extensiones, ayudan a realizar funcionalidades sin codificar todo

	 //Aquí se establece la conexión con los datos de donde se encuentra mi base de datos
	 $conexion = new mysqli (DBHOST, DBUSER, DBPASSWD, DBNAME);

	 //Si falla la conexión, que me muestre el error_get_last
	 if($conexion->connect_error)
	 {
	 die("Conexión fallida".$conexion->connect_error);
	 }

	 //Para que no salgan símbolos o espacio en negro en los acentos
	 $query = "SET NAMES 'utf8'";

	 //El signo de admiración quiere decir SINO ES EXITO
	 if(!$resultados= mysqli_query($conexion,$query))
	 {
	 exit(mysql_error($conexion));
	 }
 ?>