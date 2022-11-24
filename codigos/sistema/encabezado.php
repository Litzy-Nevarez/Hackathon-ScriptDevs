<?php
	if(session_id()==null)
		session_start();
	$resultado = 0;
	$id = session_id();
	$con = mysqli_connect("localhost","scriptdevs","scriptdevs123","scriptdevs");
	$sql = "SELECT nombre_completo, usuario FROM usuarios WHERE idSesion = '$id'";
	$rs = mysqli_query($con,$sql);
	if($rs->num_rows > 0)
	{
		$row = $rs->fetch_assoc();
		$resultado = 1;
		$usuario = $row['nombre_completo'];
		$nocontrol = $row['usuario'];
	}
	else
	{
		$resultado = 0;
	}
	echo '
	<!DOCTYPE html>
		<html>
		<head>
			<meta lang="ES">
			<meta charset="utf-8">
			<title>Bienvenido(a) a ITD+</title>
			<link rel="icon" href="imagenes/icono.png" type="image/x-icon" >
			<link rel="stylesheet" href="estilo/estilo.css">
		</head>
		<body>
			<div name="encabezado" id="encabezado" style="height:90px;width: calc(100% - 36px);background-color:#5A0202;color:white;padding:10px;position:fixed;border: none;min-width:1000px;z-index:500">
				<table height="70px" align="center" style="font-size:20px;color:white">
					<tbody>
						<tr>
							<td align="left" style="min-width:150px;font-size:70px">
								<b>ITD+</b>
							</td>';
							if($resultado == 1)
								{
									echo '
							<td align="left" style="min-width:300px">';echo $usuario;echo'
							</td>
							<td width="60%" style="min-width:212px;">
								Buscar personas...
								<br>
								<form name="buscar" method="post" action="buscar.php">
								<input type="text" id="buscartexto" name="buscartexto" style="width: calc(100% - 80px);max-width:600px"><input type="submit" id="buscar" name="buscar" style="height:26px;" value="Buscar"></form>
							</td>
							<td style="min-width:130px;cursor:pointer" align="center" onclick="document.getElementById(\'mensajes\').style.visibility = \'visible\';document.getElementById(\'circulos\').style.visibility = \'hidden\';document.getElementById(\'notificaciones\').style.visibility = \'hidden\';">
								<img src="imagenes/mensajes.png" width="60px"><a style="color:white;">Mensajes</a>
							</td>
							<td style="min-width:130px;cursor:pointer" align="center" onclick="document.getElementById(\'mensajes\').style.visibility = \'hidden\';document.getElementById(\'circulos\').style.visibility = \'visible\';document.getElementById(\'notificaciones\').style.visibility = \'hidden\';">
								<img src="imagenes/circulos.png" width="60px"><a style="color:white;">Circulos</a>
							</td>
							<td style="min-width:130px;cursor:pointer" align="center" onclick="document.getElementById(\'mensajes\').style.visibility = \'hidden\';document.getElementById(\'circulos\').style.visibility = \'hidden\';document.getElementById(\'notificaciones\').style.visibility = \'visible\';">
								<img src="imagenes/notificaciones.png" width="60px">Notificaciones
							</td>';
						}
							echo '
						</tr>
					</tbody>
				</table>
			</div>
			<br><br>';
?>