<?php
		echo "
		<span id='perfil' style='position:absolute;top:120px;left:400px;width:calc(100% - 800px);min-height:500px;min-width:300px;z-index:400'>

		<table height='200px'>
				<tbody>
					<tr>
						<td>
							<img src='imagenes/perfilgrande.png' height='180px'>
						</td>
						<td>
							<b style='font-size:40px'>";echo $usuario;echo"</b>
							<br>No. Control: ";echo $nocontrol;echo"
						</td>
					</tr>
				</tbody>
			</table>
			<br><h2 align='center'>Publicaciones</h2>

			<hr style='height:3px;color:#5A0202;background-color:#5A0202'>
			<br>
			<table style='font-size:18px'>
				<tbody>
					<tr>
						<td>
							<img src='imagenes/perfil.png' height='60px'>
						</td>
						<td>
						<b style='font-size:25px'>";echo $usuario;echo"</b>
							<br>
							<img src='imagenes/circulosnegro.png' height='20px'>&nbsp;En: Hackathon Script-Devs
						</td>
					</tr>
				</tbody>
			</table>
			<p style='color:black'>Video compartido del Canvas:<br>https://www.caanvaas.com/12345/canva-ejemplo</p>
			<table style='width:100%;'>
				<tbody>
					<tr>
						<td>
							<input type='text' placeholder='Escribe un comentario...' style='width:98%;'>
						</td>
						<td>
							<img src='imagenes/enviar.png' height='35px'>
						</td>
					</tr>
				</tbody>
			</table>

		<br><hr style='height:3px;color:#5A0202;background-color:#5A0202'>
			<br>
			<table style='font-size:18px'>
				<tbody>
					<tr>
						<td>
							<img src='imagenes/perfil.png' height='60px'>
						</td>
						<td>
						<b style='font-size:25px'>";echo $usuario;echo"</b>
							<br>
							<img src='imagenes/circulosnegro.png' height='20px'>&nbsp;En: Proyecto IHC
						</td>
					</tr>
				</tbody>
			</table>
			<p style='color:black'>Recordatorio!<br><br>Acuérdense de mandar sus archivos por correo a más tardar hoy a las 7 porfa!! Yo estaré editando los videos para subirlos más tarde.</p>
			<table style='width:100%;'>
				<tbody>
					<tr>
						<td>
							<input type='text' placeholder='Escribe un comentario...' style='width:98%;'>
						</td>
						<td>
							<img src='imagenes/enviar.png' height='35px'>
						</td>
					</tr>
				</tbody>
			</table>

		</span>
		";
?>