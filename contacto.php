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
<title>VICKY VICTORIA STORE</title>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onLoad="MM_preloadImages('image/fbOn.jpg','image/pinterestOn.jpg')">

<div id="content">
  <div id="cabecera"><img src="image/logoInterno.jpg" width="171" height="17"></div>
   <div id="menu">
        <ul>
            <li><a href="home.html">HOME</a></li>
            <li><a href="nosotros.html">NOSOTROS</a></li>
            <li><a href="galeria.html">LOCAL</a></li>
            <li>CONTACTO</li>
            <li id="shop"><a href="#">SHOP-ONLINE</a></li>
        </ul>
    </div>


  <div id="contenido"><img src="image/imgNosotros.jpg" width="1025" height="354">
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
                <li><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('FACEBOOK','','image/fbOn.jpg',1)"><img src="image/fb.jpg" name="FACEBOOK" width="28" height="28" border="0"></a></li>
                <li><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('PINTEREST','','image/pinterestOn.jpg',1)"><img src="image/pinterest.jpg" name="PINTEREST" width="28" height="28" border="0"></a></li>
            </ul>
        </div>

      <div id="pieInterna">
			Defensa 1015, Buenos Aires   4307 9409 / <a href="mailto:info@vickyvictoriastore.com">info@vickyvictoriastore.com</a>
      </div>
</div>

</body>
</html>
