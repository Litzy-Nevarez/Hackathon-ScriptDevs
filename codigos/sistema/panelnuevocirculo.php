<?php
		echo "
		<span id='nuevocirculo' style='position:absolute;top:120px;left:400px;width:calc(100% - 800px);min-height:500px;min-width:300px;z-index:400'>
			<h2 align='center'>Nuevo círculo</h2>

			<form name='nuevocirculo' method='post' action='circulosubmit.php'>
			<hr style='height:3px;color:#5A0202;background-color:#5A0202'>
			<h3 align='center'>Nombre del círculo</h3>
			<br><input type='text' name='nombrecirculo' id='nombrecirculo' placeholder='Nombre' style='display:block;margin:0 auto;width:300px;text-align:center'>
			<br><h3 align='center'>Descripción breve del círculo</h3>
			<br><input type='text' name='descripcioncirculo' id='descripcioncirculo' placeholder='Descripción' style='display:block;margin:0 auto;width:300px;text-align:center'>
			<br>
			<br><button id='guardarcirculo' type='submit' style='display:block;margin:0 auto;background-color:#5A0202;color:white;font-size:20px;min-width:160px;min-height:40px'>Crear círculo</button><br>
			</form>
		</span>
		";
?>