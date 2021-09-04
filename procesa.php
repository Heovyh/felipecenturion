<?php
$destinatario = "felipe170786@gmail.com"; 
$asunto = "CONSULTA MÉDICA"; 
$cuerpo = ' 
<html> 
	<head> 
		<title>Mail enviado desde DrFelipe.com</title> 
	</head> 
	<body> 
		<center style="font-family:arial;color:gray;">
			<div style="padding:8px 0 8px 0;text-decoration:underline;text-align:center;font-weight:bold">Contactenos</div>
			<table style="width:80%;valign:top;text-align:justify;">
				<tr>
					<td style="width:70px;">
						Paciente
					</td>
					<td style="width:5px;">
						:
					</td>
					<td>'
						.$name=$_POST['inputNombresCompletos']
					.'</td>
				</tr>
				<tr>
					<td style="width:70px;text-align:justify;">
						Edad
					</td>
					<td style="width:5px;">
						:
					</td>
					<td>'
						.$name=$_POST['inputEdad']
					.'</td>
				</tr>
				<tr>
					<td style="width:70px;">
						Teléfono 
					</td>
					<td style="width:5px;">
						:
					</td>
					<td>'
						.$name=$_POST['inputTelefono']
					.'</td>
				</tr>
				<tr>
					<td style="width:70px;text-align:justify;">
						E-mail 
					</td>
					<td style="width:5px;">
						:
					</td>
					<td>'
						.$name=$_POST['inputCorreo']
					.'</td>
				</tr>				
			</table>
			<div style="padding:8px 0 8px 0;text-decoration:underline;text-align:left;font-weight:bold;width:80%;">Mensaje</div>
			<div style="text-align:justify;width:80%;">
				&nbsp;&nbsp;&nbsp;'
				.$name=$_POST['inputCorreoMensaje'].'
				<br/><br/><br/>
				<div style="text-align:center;width:80px;">
					Administración<br/>
				</div>
			</div>
		</center>
	</body> 
</html> 
'; 

//Envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//Dirección del remitente 
$headers .= "From: Página <felipe170786@gmail.com>\r\n"; 

//Dirección de respuesta (Puede ser una diferente a la de pepito@mydomain.com)
$headers .= "Reply-To: Página <felipe170786@gmail.com>\r\n";

//Ruta del mensaje desde origen a destino 
/*$headers .= "Return-path: holahola@mydomain.com\r\n"; */

//direcciones que recibián copia 
/*$headers .= "Cc: maria@mydomain.com\r\n"; */

//Direcciones que recibirán copia oculta 
/*$headers .= "Bcc: pepe@pepe.com, juan@juan.com\r\n"; */

mail($destinatario,$asunto,$cuerpo,$headers);

header('location:mail.html'); // y vamos a la pagina en donde nos dan las gracias por haber llenado en formulario*/
?>