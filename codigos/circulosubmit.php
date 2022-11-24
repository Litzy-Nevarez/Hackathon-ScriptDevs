<?php
	include 'sistema/encabezado.php';
	$con = mysqli_connect("localhost","scriptdevs","scriptdevs123","scriptdevs");
	session_start();
	$nom = $_POST["nombrecirculo"];
	$desc = $_POST["descripcioncirculo"];
	$filas = $rs->num_rows;
	$sql = "INSERT INTO circulos (nombre, descripcion, usuario) VALUES ('$nom', '$desc', '$nocontrol')";
	$rs = mysqli_query($con,$sql);
	if($rs)
	{
		header('Location:circuloexito.php');
		exit();
	}
	include 'sistema/pie.php';
?>