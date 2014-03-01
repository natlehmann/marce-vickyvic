<!DOCTYPE HTML>

<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'marcelaueno@hotmail.com';
$titulo = 'ASUNTO DEL MENSAJE';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style/style1.css" />
<link rel="stylesheet" href="style/mobile.css" type="text/css"
	media="only screen and (max-width : 568px)" />
<link rel="stylesheet" href="style/mobile.css" type="text/css"
	media="only screen and (max-width : 792px) and (orientation : portrait)" />
<link rel="stylesheet" href="style/mobile-bigger.css" type="text/css"
	media="only screen and (max-width : 568px) and (min-height : 640px)" />
<title>VICKY VICTORIA STORE</title>

<script src="js/general.js"></script>
</head>

<body class="notHome"
	onLoad="MM_preloadImages('image/fbOn.jpg','image/pinterestOn.jpg')">

	<div id="content">
		<div id="cabecera">
			<img src="image/logoInterno.jpg" width="171" height="17">
		</div>
		<div id="menu">
			<ul>
				<li><a href="home.html">HOME</a></li>
				<li><a href="nosotros.html">NOSOTROS</a></li>
				<li><a href="galeria.html">LOCAL</a></li>
				<li>CONTACTO</li>
				<li id="shop"><a href="#">SHOP-ONLINE</a></li>
			</ul>
		</div>


		<div id="contenido">
			<img src="image/imgNosotros.jpg" width="1025" height="354">
			<div id="textoInterno">
				<div class="textoNosotros">
					<?php
if (mail($para, $titulo, $msjCorreo, $header)) {
?>
					SU MENSAJE FUE ENVIADO EXITOSAMENTE. GRACIAS!
					<?php
} else {
    ?>
					SU MENSAJE no FUE ENVIADO. GRACIAS!
					<?php
        }
?>
				</div>
			</div>
		</div>


		<div id="redesSociales">
			<ul>
				<li><a href="#" onMouseOut="MM_swapImgRestore()"
					onMouseOver="MM_swapImage('FACEBOOK','','image/fbOn.jpg',1)"><img
						src="image/fb.jpg" name="FACEBOOK" width="28" height="28"
						border="0"></a></li>
				<li><a href="#" onMouseOut="MM_swapImgRestore()"
					onMouseOver="MM_swapImage('PINTEREST','','image/pinterestOn.jpg',1)"><img
						src="image/pinterest.jpg" name="PINTEREST" width="28" height="28"
						border="0"></a></li>
			</ul>
		</div>

		<div id="pieInterna">
			Defensa 1015, Buenos Aires 4307 9409 / <a
				href="mailto:info@vickyvictoriastore.com">info@vickyvictoriastore.com</a>
		</div>
	</div>

</body>
</html>
