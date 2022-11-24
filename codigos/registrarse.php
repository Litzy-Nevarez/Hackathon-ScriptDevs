<?php
	include 'sistema/encabezado.php';
	echo '
	<br><br><br><br><button id="volver" style="background-color:#5A0202;font-size:20px;min-width:160px;min-height:40px"><a style="color:white;text-decoration:none" href="../"><-- Volver</button></a><br>
	<form name="registrarse" method="post" action="registrarsesubmit.php">
		<br><br><h2 align="center">Número de control:</h2>
		<br><input type="text" name="usuario" id="usuario" style="display:block;margin:0 auto;text-align:center">
		<br><br><h2 align="center">Nombre completo:</h2>
		<br><input type="text" name="nombre" id="nombre" style="display:block;margin:0 auto;text-align:center">
		<br><br><br><h2 align="center">Contraseña:</h2>
		<br><input type="password" name="pass" id="pass" style="display:block;margin:0 auto;text-align:center">
		<br><br><br><input type="submit" name="submit" id="submit" style="display:block;margin:0 auto;text-align:center;height:30px" value="Registrarse"><br>
	</form>';
	include 'sistema/pie.php';
?>