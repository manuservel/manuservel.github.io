
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
<h2 align="center">Thank you!</h2>

<p align="center">Your message has been sent correctly, we will contact you shortly.</p>
<p align="center"> </p>
<p><span style="color:red;font-size:150%;font-weight:bold;"><?php print $email; ?></span></p>

<p align="center">Press 

<script type='text/javascript'>

document.write('<a href="javascript:history.go(-1);">come back</a>');

</script>

<noscript> back </noscript> and return to our website</p>


<noscript>

<p align="center" class="details"></p>

</noscript>



