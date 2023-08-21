<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<!--Todo esto para que salga como resultado la página con estas palabras clave-->
		<META charset = "UTF-8">
		<META name = "description"content = "Clase de Aplicaciones Web, 4DM, Materia Aplicaciones Servidor">
		<META name = "keywords"content = "programación, programacion, CETis58,emiliano zapata">
		<META name = "author"content = "03 Avila Chiu Oscar Ivanovich">
		<TITLE> Mis aplicaciones Web 4DM | Avila Chiu Oscar Ivanovich </TITLE>
		<LINK rel="shortcut icon"href="/favicon.ico"type="image/x-icon">
		<LINKREL="icon"href="/favicon.ico"type="image/x-icon">
	</HEAD>
	<BODY>
		<UL>
			<!-- <LI>=Lista y <A>=Ancla para link -->
			<LI> <A href="."> Inicio </A> </LI>
			<!-- Lo mandamos para que vaya al archivo dentro de la carpteta y el "target" es para que se abra pero en otra pestaña-->
			<LI> <A href="http://localhost/03_Avila/?accion=practica01" target = "_black"> Pr&aacute;ctica 01 </A> </LI>
			<LI> <A href="http://localhost/03_Avila/?accion=practica02"> Pr&aacute;ctica 02 </A> </LI>
			<LI> <A href="http://localhost/03_Avila/?accion=practica04"> Pr&aacute;ctica 04 </A> </LI>
			<LI> <A href="http://localhost/03_Avila/?accion=practica05"> Pr&aacute;ctica 05 </A> </LI>
			
			<LI> Alumnos
				<Ul>
					<LI> <A href="<?=ROOTURL?>?accion=listAlumnos"> Lista de Alumnos - Pr&aacute;ctica 06 - Tema Funciones </A> </LI>
					<LI> <A href="<?=ROOTURL?>?accion=addAlumno"> Registrar Alumno - Pr&aacute;ctica 08 </A> </LI>
				</UL>
			</LI>
			
			<LI> Libros
				<Ul>
					<LI> <A href="<?=ROOTURL?>?accion=listLibros"> Lista de Libros - Pr&aacute;ctica 06 - Tema Funciones </A> </LI>
					<LI> <A href="<?=ROOTURL?>?accion=addLibro"> Registrar Libro - Pr&aacute;ctica 08 </A> </LI>
				</UL>
			</LI>
			
			<LI> Pr&eacute;stamos 
				<Ul>
					<LI> <A href="<?=ROOTURL?>?accion=listPrestamos"> Lista de Pr&eacute;stamos </A> </LI>
					<LI> <A href="<?=ROOTURL?>?accion=addPrestamo"> Registrar Pr&eacute;stamos </A> </LI>
				</UL>
			</LI>
			
			<LI>
				<A href="Login/logout.php"> Cerrar Sesi&oacute;n </A> 
			</LI>
		</UL>