<?php
	// Este archivo será solo php
			function obtenerListaAlumnos()
			 {
			 include_once('MySqli_conexiondb.php');

			 $query = "SELECT IDAlumno, APaterno, AMaterno, Nombre, Grupo FROM alumnos";

			 $resultado = mysqli_query($conexion, $query );

			 if(!$resultado)
			 {
				exit(mysqli_error($conexion));
			 }

			 // un arreglo puede guardar datos de diferentes tipos
			 // el arreglo no necesita declarar límite para guardar datos
			 // así se declara un arreglo
			 $lista = array();

			 if(mysqli_num_rows($resultado)>0)
			 {
				 while($renglon = mysqli_fetch_assoc($resultado))
				 {
					 // Lo que está antes del "$renglon" es para un alias, fácil de ver
					 $lista[] = array
					 (
						 'IDAlumno' => $renglon['IDAlumno'],
						 'APaterno' => $renglon['APaterno'],
						 'AMaterno' => $renglon['AMaterno'],
						 'Nombre' => $renglon['Nombre'],
						 'Grupo' => $renglon['Grupo']
					 );
				 }
			 }
			 return $lista;
		 }

	 // ninguna función o procedimiento debe tener el mismo nombre
	 // los PARÁMETROS son información o datos que recibo de otro lugar
	 // los PARÁMETROS se escriben en los paréntesis de la función o procedimiento (en PHP)
	 function obtenerDatosAlumnos($IDAlumno)
	 {
		 include('MySqli_conexiondb.php');

		 // esta es mi sentencia de consulta por con una condición
		 $query = "SELECT IDAlumno, APaterno, AMaterno, Nombre, Grupo FROM alumnos WHERE IDAlumno=".$IDAlumno;

		 $resultado = mysqli_query($conexion, $query );
		 if(!$resultado)
		 {
			exit(mysqli_error($conexion));
		 }
		 $lista = array();

		 if(mysqli_num_rows($resultado)>0)
		 {
			 while($renglon = mysqli_fetch_assoc($resultado))
			 {
				 $lista = array
				 (
					'IDAlumno' => $renglon['IDAlumno'],
					'APaterno' => $renglon['APaterno'],
					'AMaterno' => $renglon['AMaterno'],
					'Nombre' => $renglon['Nombre'],
					'Grupo' => $renglon['Grupo']
				 );
			 }
		 }
		 return $lista;
	 }

	 // ------------------------------ FIN FUNCIONALIDADES ALUMNOS------------------------------ //
	 // ------------------------------ INICIO FUNCIONALIDADES LIBROS------------------------------ //


	 function obtenerListaLibros()
	 {
		 include('MySqli_conexiondb.php');

		 $query = "SELECT IDLibro, Titulo, Autor, Editorial, anioPublicacion FROM libros";

		 $resultado = mysqli_query($conexion, $query );

		 if(!$resultado)
		 {
			exit(mysqli_error($conexion));
		 }

		 // un arreglo puede guardar datos de diferentes tipos
		 // el arreglo no necesita declarar límite para guardar datos
		 // así se declara un arreglo
		 $lista = array();

		 if(mysqli_num_rows($resultado)>0)
		 {
			 while($renglon = mysqli_fetch_assoc($resultado))
			 {
				 // Lo que está antes del "$renglon" es para un alias, fácil de ver
				 $lista[] = array
				 (
					 'IDLibro' => $renglon['IDLibro'],
					 'Titulo' => $renglon['Titulo'],
					 'Autor' => $renglon['Autor'],
					 'Editorial' => $renglon['Editorial'],
					 'anioPublicacion' => $renglon['anioPublicacion']
				 );
			 }
		 }
		 return $lista;
	 }
	 
	 function obtenerDatosLibros($IDLibro)
	 {
		 include('MySqli_conexiondb.php');

		 $query = "SELECT IDLibro, Titulo, Autor, Editorial, anioPublicacion FROM libros WHERE IDLibro=".$IDLibro;

		 $resultado = mysqli_query($conexion, $query );
		 if(!$resultado)
		 {
			exit(mysqli_error($conexion));
		 }
		 $lista = array();

		 if(mysqli_num_rows($resultado)>0)
		 {
			 while($renglon = mysqli_fetch_assoc($resultado))
			 {
				 $lista = array
				 (
					'IDLibro' => $renglon['IDLibro'],
					'Titulo' => $renglon['Titulo'],
					'Autor' => $renglon['Autor'],
					'Editorial' => $renglon['Editorial'],
					'anioPublicacion' => $renglon['anioPublicacion']
				 );
			 }
		 }
		 return $lista;
	 }
	 
	 // ------------------------------ FIN FUNCIONALIDADES LIBROS------------------------------ //
	 // ------------------------------ INICIO FUNCIONALIDADES PRESTAMOS------------------------------ //
	 
	 function obtenerListaPrestamos()
	 {
		 include_once('MySqli_conexiondb.php');

		 $query = "SELECT IDPrestamo, IDAlumno, IDLibro, FechaPrestamo, FechaDevolucion, Cantidad, Estado FROM prestamos";

		 $resultado = mysqli_query($conexion, $query );

		 if(!$resultado)
		 {
			exit(mysqli_error($conexion));
		 }
		 $lista = array();

		 if(mysqli_num_rows($resultado)>0)
		 {
			 while($renglon = mysqli_fetch_assoc($resultado))
			 {
				 $lista[] = array
				 (
					 'IDPrestamo' => $renglon['IDPrestamo'],
					 'IDAlumno' => $renglon['IDAlumno'],
					 'IDLibro' => $renglon['IDLibro'],
					 'FechaPrestamo' => $renglon['FechaPrestamo'],
					 'FechaDevolucion' => $renglon['FechaDevolucion'],
					 'Cantidad' => $renglon['Cantidad'],
					 'Estado' => $renglon['Estado']
				 );
			 }
		 }
		 return $lista;
	 }
 ?>