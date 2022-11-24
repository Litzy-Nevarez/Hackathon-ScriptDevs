<?php

	$con = mysqli_connect("localhost","scriptdevs","scriptdevs123","scriptdevs");
	session_start();
	$usuario = $_POST["usuario"];
	$pass = $_POST["pass"];
	$nombre = $_POST["nombre"];
	$id = session_id();
	$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
	$rs = mysqli_query($con,$sql);
	if($rs->num_rows > 0)
	{
		include 'sistema/encabezado.php';
		echo "
		<br><br><br><br><h2>Número de control ya registrado. Inténtelo de nuevo con otro número o póngase en contacto con un administrador.</h2>";
	}
	else
	{
		$sql = "INSERT INTO usuarios (usuario, pass, nombre_completo, idSesion) VALUES ('$usuario', '$pass', '$nombre', '$id')";
		$rs = mysqli_query($con,$sql);
		include 'sistema/encabezado.php';
		if($rs)
		{
			header('Location:inicio.php');
			exit();
		}
	}
	include 'sistema/pie.php';
?>