<?php
	session_start();
	include 'sistema/encabezado.php';
	if($resultado == 1)
	{
		header('Location:inicio.php');
		exit();
	}
	else
		echo "<br><br><br><br>
		<h1 align='center'>¡Bienvenido(a) a ITD+!</h1>
		<h3 align='center'>Una herramienta que te ayuda a gestionar la información de tus proyectos y equipos más fácilmente.</h3>
		<h3 align='center'>Encuentra información sobre cursos ofrecidos por el ITD y el CLE, y regístrate en ellos con facilidad.</h3>
		<br><h3 align='center'>Inicia sesión para acceder a tus círculos y publicaciones.
		<br><br><button id='login' style='background-color:#5A0202;font-size:20px;min-width:160px;min-height:40px'><a style='color:white;text-decoration:none' href='iniciarsesion.php'>Iniciar sesión</button></a>
		<br><br><br>¿Eres nuevo? ¡Regístrate!
		<br><br><button id='registrarse' style='background-color:#5A0202;font-size:20px;min-width:160px;min-height:40px'><a style='color:white;text-decoration:none' href='registrarse.php'>Registrarse</button></a></h3><br>
	";
	include 'sistema/pie.php';
?>