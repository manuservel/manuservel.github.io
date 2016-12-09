
<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$telefono = $_POST['telefono'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por... " . $nombre . ", con telefono " . $telefono . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Fue enviado... " . date('d/m/Y', time());

$para = "mserrano_velazquez@hotmail.com";
$asunto = 'contacto web';


mail($para, $asunto, utf8_decode($mensaje), $header);


?>
</h2>
<h2 align="center">Gracias!</h2>

<p align="center">Su mensaje ha sido enviado correctamente, en breve nos pondremos en contacto con usted.</p>
<p align="center"> </p>
<p><span style="color:red;font-size:150%;font-weight:bold;"><?php print $email; ?></span></p>

<p align="center">Pulse

<script type='text/javascript'>

document.write('<a href="javascript:history.go(-1);">vuelve atras</a>');

</script>

<noscript>atras</noscript> y vuelva a nuestra web</p>


<noscript>

<p align="center" class="details"></p>

</noscript>



