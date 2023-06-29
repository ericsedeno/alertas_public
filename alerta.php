<?php

$URLOK = $_GET['DENIEDURL']; 
$URL_DIVIDIDA = explode("::", $URLOK);

$URL = substr($URL_DIVIDIDA[0], 1);
$IP = substr($URL_DIVIDIDA[1], 4);
$USER = substr($URL_DIVIDIDA[2], 6);
$CATEGORIA = substr($URL_DIVIDIDA[3], 12);
$RAZON = substr($URL_DIVIDIDA[4], 8);;

	switch ($CATEGORIA) 
	{
		case "PUBLICIDAD":
			$LOGO = "logo_pu.png";
			$COLOR_FONDO= "#52959E";
			$COLOR_LETRA= "#000000";
			$MENSAJE1 = "PUBLICIDAD DESHABILITADA";
			$MENSAJE2 = "El sitio al que intenta acceder est&aacute; catalogado como emisor de Publicidad, con el objetivo de optimizar el Ancho de Banda de la Sucursal este tipo de p&aacute;ginas han sido deshabilitadas.";
			$MENSAJE3 = "Si le parece que esta catalogaci&oacute;n es err&oacute;nea por favor dir&iacute;jase al Nodo SMC Camag&uuml;ey para revisarlo.";
			$MENSAJE4 = "";
			break;
		case "ANONIMATO":
			$LOGO = "logo_an.png";
			$COLOR_FONDO= "#000000";
			$COLOR_LETRA= "#FFFFFF";
			$MENSAJE1 = "SITIO DE ANONIMATO";
			$MENSAJE2 = "El Sitio al que intenta acceder est&aacute; catalogado de propiciar navegaci&oacute;n de forma an&oacute;nima, este tipo de sitios no est&aacute; permitido ya que se asume que usted desea ocultar las p&aacute;ginas que visitar&iacute;a.";
			$MENSAJE3 = "Si se comprueba que la catalogaci&oacute;n del sitio es correcta usted perder&aacute; la navegaci&oacute;n a trav&eacute;s de la Red SMC Camag&uuml;ey, esta decisi&oacute;n es INAPELABLE y est&aacute; en consonancia con la planilla que usted firmo y estuvo de acuerdo al solicitar este servicio.";
			$MENSAJE4 = "Ha sido enviada una alerta al Administrador de la Red con sus datos.";
			break;
		case "JUEGOS":
			$LOGO = "logo_ju.png";
			$COLOR_FONDO= "#4684B5";
			$COLOR_LETRA= "#000000";
			$MENSAJE1 = "JUEGOS DESHABILITADOS";
			$MENSAJE2 = "Ha intentado acceder a un sitio que est&aacute; catalogado como emisor de CONTENIDO DE ENTRETENIMIENTO, por razones l&oacute;gicas estos sitios se encuentran deshabilitados.";
			$MENSAJE3 = "Si le parece que esta catalogaci&oacute;n es err&oacute;nea por favor dir&iacute;jase al Nodo SMC Camag&uuml;ey para revisarlo.";
			$MENSAJE4 = "";
			break;
		case "PORNOGRAFIA":
			$LOGO = "logo_po.png";
			$COLOR_FONDO= "#ED1C24";
			$COLOR_LETRA= "#FFFFFF";
			$MENSAJE1 = "SITIO PORNOGRAFICO";
			$MENSAJE2 = "Ha intentado acceder a un sitio que est&aacute; catalogado como emisor de CONTENIDO PARA ADULTOS, el sitio, su nombre de usuario, el equipo desde donde accede, la fecha y la hora han quedado registradas para su posterior an&aacute;lisis.";
			$MENSAJE3 = "Si se comprueba que la catalogaci&oacute;n del sitio es correcta usted perder&aacute; la navegaci&oacute;n a trav&eacute;s de la Red SMC Camag&uuml;ey, esta decisi&oacute;n es INAPELABLE y est&aacute; en consonancia con la planilla que usted firmo y estuvo de acuerdo al solicitar este servicio.";
			$MENSAJE4 = "Ha sido enviada una alerta al Administrador de la Red con sus datos.";
			break;
		case "PRENSA":
			$LOGO = "logo_pr.png";
			$COLOR_FONDO= "#0A2A29";
			$COLOR_LETRA= "#FFFFFF";
			$MENSAJE1 = "SITIO DE PRENSA CONTRARREVOLUCIONARIA";
			$MENSAJE2 = "La configuraci&oacute;n actual impide que tenga acceso a p&aacute;ginas de contenido pol&iacute;tico en contra de nuestro proceso revolucionario. Si esto le parece incorrecto dir&iacute;jase al Nodo SMC Camag&uuml;ey.";
			$MENSAJE3 = "Para acceder a este tipo sitios utilice cualquiera de las v&iacute;as que ofrece ETECSA y no lo haga desde una conexi&oacute;n que paga la revoluci&oacute;n cubana. <b><i>¡SEA COHERENTE!</b></i>";
			$MENSAJE4 = "";
			break;	
		case "IP":
			$LOGO = "logo_ip.png";
			$COLOR_FONDO= "#6DAFE1";
			$COLOR_LETRA= "#000000";
			$MENSAJE1 = "NAVEGACIÓN IP DESHABILITADA";
			$MENSAJE2 = "Ha intentando navegar a trav&eacute;s de una direcci&oacute;n IP, este tipo de navegaci&oacute;n est&aacute; deshabilitada por cuestiones de seguridad, intente encontrar la direcci&oacute;n web original del sitio e int&eacute;ntelo por esa v&iacute;a.";
			$MENSAJE3 = "Si esto le parece incorrecto dir&iacute;jase al Nodo SMC Camag&uuml;ey";
			$MENSAJE4 = "";
			break;	
		case "2IP":
			$LOGO = "logo_2ip.png";
			$COLOR_FONDO= "#C3E5FF";
			$COLOR_LETRA= "#000000";
			$MENSAJE1 = "USUARIO LOGUEADO EN 2 EQUIPOS";
			$MENSAJE2 = "El nombre de usuario con el que intenta acceder ya se est&aacute; usando desde otro equipo en este instante. Esto representa una violaci&oacute;n de la Seguridad Inform&aacute;tica.";
			$MENSAJE3 = "Este usuario ser&aacute; deshabilitado temporalmente si es la primera incidencia de este tipo. Tiene que pasar por el Departamento de Inform&aacute;tica.";
			$MENSAJE4 = "Ha sido enviada una alerta al Administrador de la Red con sus datos";
			break;
		case "MAX":
			$LOGO = "logo_ma.png";
			$COLOR_FONDO= "#134B9E";
			$COLOR_LETRA= "#FFFFFF";
			$MENSAJE1 = "MAXIMO DE CONEXIONES SUPERADAS";
			$MENSAJE2 = "Ha superado el m&aacute;ximo de conexiones establecidas en el servidor. En vistas de garantizar un mejor uso del ancho de banda y la cuota se puesto este l&iacute;mite, intente no acceder tantas pesta&ntilde;as simult&aacute;neamente. Cierre su navegador y espere 10 minutos para abrirlo nuevamente.";
			$MENSAJE3 = "Si le parece incorrecto por favor dir&iacute;jase al Nodo SMC Camag&uuml;ey para revisarlo.";
			$MENSAJE4 = "";
			break;
		case "CUOTA":
			$LOGO = "logo_cu.png";
			$COLOR_FONDO= "#BCCDD7";
			$COLOR_LETRA= "#000000";
			$MENSAJE1 = "CUOTA EXCEDIDA";
			$MENSAJE2 = "Usted ha excedido la <b>Cuota de Megas</b> asignada para el día de hoy.";
			$MENSAJE3 = "El Sistema de Cuotas se implementa para lograr en equilibro entre Ancho de Banda asignado y la cantidad de usuarios que hacen uso de la navegaci&oacute;n.<br>La navegaci&oacute;n nacional (.cu) queda libre de consumo de cuota.";
			$MENSAJE4 = "Puedes acceder a <i><b>Mi Cuenta</b></i> para verificar en que momentos consumiste tu cuota.";
			break;
		case "DOWNLOAD":
			$LOGO = "logo_do.png";
			$COLOR_FONDO= "#009966";
			$COLOR_LETRA= "#FFFFFF";
			$MENSAJE1 = "DESCARGAS DESHABILITADAS";
			$MENSAJE2 = "En este momento las descargas est&aacute;n deshabilitadas, se bloquean con el objetivo de garantizar una conectividad aceptable en el horario laboral.";
			$MENSAJE3 = "Puede realizar las descargas desde nuestra red despu&eacute;s de las 10:30 de la mañana.";
			$MENSAJE4 = "";
			break;
		case "ACTUALIZACIONES":
			$LOGO = "logo_ac.png";
			$COLOR_FONDO= "#39A6C7";
			$COLOR_LETRA= "#003333";
			$MENSAJE1 = "ACTUALIZACIONES DESHABILITADAS";
			$MENSAJE2 = "En este momento las actualizaciones est&aacute;n deshabilitadas, se bloquean con el objetivo de garantizar una conectividad aceptable en el horario laboral.";
			$MENSAJE3 = "Si necesita alguna actualizaci&oacute;n gesti&oacute;nela con el Administrador de la Red.";
			$MENSAJE4 = "";
			break;
		case "NACIONAL":
			$LOGO = "logo_na.png";
			$COLOR_FONDO= "#DEEBF6";
			$COLOR_LETRA= "#333333";
			$MENSAJE1 = "SOLO NAVEGACION NACIONAL";
			$MENSAJE2 = "La configuraci&oacute;n actual de su usuario impide que tenga acceso a p&aacute;ginas de alcance internacional. Si esto le parece incorrecto dir&iacute;jase al Nodo SMC Camag&uuml;ey.";
			$MENSAJE3 = "Motivos de la navegaci&oacute;n nacional: Mala configuraci&oacute;n de la cuenta en el Servidor; Uso de la cuenta por parte de terceros; Violaciones al Reglamento y/o al C&oacute;digo de &Eacute;tica o su usuario no requiere navegaci&oacute;n internacional.";
			$MENSAJE4 = "";
			break;
	}
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- Etiquetas <meta> obligatorias para Bootstrap -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="img/favicon.png">
		<title>Alerta - Acceso denegado</title>
	
		<!-- Enlazando el CSS de Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet" media="screen">
		<link href="css/main.css" rel="stylesheet" media="screen">
		<style type="text/css">body {margin-top: 5px; background:<?php echo $COLOR_FONDO; ?>}</style>
		
		<!-- Enlazando el JavaScript de Bootstrap -->
		<script src="js/jquery-3.5.1.js"></script>
		<script src="js/bootstrap.js"></script>
	</head>
	
	<body>
		<div class="container">
			<div align="center">
				<div align="center" style="width:100%"> 
					<!-- Inicio de Encabezado -->
					<div class="row">
						<div class="col" align="center"><?php echo "<div align='center'><img src='img/$LOGO'></div>"; ?></div>
					</div>	
					<!-- Fin de Encabezado -->
					<div align="center" style="font-size:10px">&nbsp;</div>
					<div align="center" style="color:<?php echo $COLOR_LETRA; ?>; font-size:24px"><?php echo $MENSAJE1; ?></div>
					<div align="center" style="font-size:4px">&nbsp;</div>
					<div align="justify">
						<div align="justify" style="color:<?php echo $COLOR_LETRA; ?>; font-size:22px"><?php echo $MENSAJE2?></div>
						<div align="justify" style="color:<?php echo $COLOR_LETRA; ?>; font-size:16px"><?php echo $MENSAJE3?></div>
						<div align="justify" style="color:<?php echo $COLOR_LETRA; ?>; font-size:16px"><?php echo $MENSAJE4?></div>
					</div>		
				</div>
			</div> 
			<!-- Inicio del Pie de Página -->
			<div id="footer">
				<div align="center"><a href="http://www.cmw.smcsalud.cu" target="_self" style="color:<?php echo $COLOR_LETRA; ?>; font-size:14px">Web SMC</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="text/rule.html" target="_blank" style="color:<?php echo $COLOR_LETRA; ?>; font-size:14px">Reglamento de  Red</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:<?php echo $COLOR_LETRA; ?>; font-size:14px"><a href="text/code.html" target="_blank" style="color:<?php echo $COLOR_LETRA; ?>; font-size:14px">C&oacute;digo de &Eacute;tica</a></br>
				<div align="center" style="color:<?php echo $COLOR_LETRA; ?>; font-size:12px">Servicios M&eacute;dicos Cubanos, Sucursal Camag&uuml;ey</div>
			</div>
			<!-- Fin del Pie de Página -->
		</div> 
	</body>  
</html>

<?php
	/* DEFINIENDO DESDE QUE TIPO DE ALERTAS SE ENVIARA NOTIFICACION */
	$Fecha_Ahora = date("d/m/Y h:i:s a",time());
	$Localizacion = "SMC";
	
	if ($CATEGORIA == "ANONIMATO" or $CATEGORIA == "PORNOGRAFIA" or $CATEGORIA == "2IP" or $CATEGORIA == "PRENSA")
	{
		/* ENVIANDO ALERTAS POR CORREO */
		//FICHEROS PARA PHPMAIL
		require_once "class/class.smtp.php";
		require_once "class/class.phpmailer.php";
		$mail = new PHPMailer();
		$mail->From = "azufre.cmw@infomed.sld.cu";
		$mail->FromName = "Root SMC";
		$mail->Subject = "ALERTA, Trafico prohibido detectado";
		$mail->Host = "201.220.211.39";
		$mail->Port = 25;
		$mail->SMTPAuth = false;
		$mail->Mailer = "smtp";
		$mail->AddAddress("azufre.cmw@infomed.sld.cu");
		$mail->IsHTML(true);
		$mail->AddEmbeddedImage("img/logo-mail.jpg", "logo"); 
		$mail->AddEmbeddedImage("img/lin-up.jpg", "lin-up"); 
		$mail->AddEmbeddedImage("img/lin-down.jpg", "lin-down"); 
		$mail->Body = "<div><img src='cid:logo' alt='Logo' width='349' height='84'/></div>
		<div><img src='cid:lin-up' width='100%' height='2'/></div><br>
		<div style=font-size:22px;color:#FF0000;>Se ha detectado trafico que coincide con la ACL: $CATEGORIA</div><br>
		<div>Detalles del acceso:</div>
	    <div>LOCALIZACION: SMC</div>
	    <div>USUARIO: $USER</div>
        <div>IP: $IP</div>
		<div>FECHA: $Fecha_Ahora</div>
		<div>URL: $URL</div><br><br>
		<div><img src='cid:lin-down' width='100%' height='1'/></div>"; 
		$mail->AltBody = "Active la vista HTML para ver el correo."; 
		$mail->Send();
		
		/* ENVIANDO ALERTAS POR TELEGRAM */
		$token = "6257032372:AAEyuDuSnbJtRb5QDPDeKM721qgO4PROaRY";
		$id = "1119828821";
		$urlMsg = "https://api.telegram.org/bot{$token}/sendMessage";
		$msg = "Se ha detectado trafico que coincide con la ACL: $CATEGORIA\nDetalles del acceso:\nLOCALIZACION: $Localizacion\nUSUARIO: $USER\nIP: $IP\nFECHA: $Fecha_Ahora\nURL: $URL";
		 
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $urlMsg);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 
		$server_output = curl_exec($ch);
		curl_close($ch);
	}	
?>