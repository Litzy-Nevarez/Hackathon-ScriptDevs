<?php
	$usuario = $_POST["usuario"];
	$pass = $_POST["pass"];
	session_start();
	$con = mysqli_connect("localhost","scriptdevs","scriptdevs123","scriptdevs");
	$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND pass = '$pass'";
	$rs = mysqli_query($con,$sql);
	$id = session_id();
	if($rs->num_rows > 0)
	{

		$_SESSION['usuario'] = $usuario;
		$sql2 = "UPDATE usuarios SET idSesion = '$id' WHERE usuario = '$usuario'";
		$rs2 = mysqli_query($con,$sql2);
		header('Location:inicio.php');
		exit();
	}
	else
	{
		include 'sistema/encabezado.php';
		echo "
		<br><br><br><br><h2>Número de control o contraseña incorrectos.</h2>";
	}
?>