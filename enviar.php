<?php
session_start();
$web_actual = "Formulario de contacto web";
// recogida de variables
$name=trim($_POST['name']);
$email=trim($_POST['email']);
$subject=trim($_POST['subject']);
$message=trim($_POST['message']);
// recogida variables de sesion iniciales
$_SESSION['namec']=trim($_POST['name']);
$_SESSION['emailc']=trim($_POST['email']);
$_SESSION['subjectc']=trim($_POST['subject']);
$_SESSION['messagec']=trim($_POST['message']); 

//Cuerpo de validación
$validacion = true;
// $error = "Hay errores en la validación del formulario, por favor activa JavaScript en tu navegador y vuelva a intentarlo"
// --------------------------------------------------------------------------------------------Nombre//
if (!isset($name)) { // Comprueba que el nombre existe
	$validacion = false;
$error = "1"; 
}
if(!preg_match("/^[a-zA-ZüÜáéíóúÁÉÍÓÚñÑ ]+$/", $name)) {//Comprueba que el nombre solo contiene letras mayusuculas y minusculas + tildes o espacios
	$validacion = false;
$error = "2"; 
}
if (strlen($name) < 2 or strlen($name) > 40 ) {//Comprueba que la longitud del nombre no es mayor de 40 ni menor de 2
	$validacion = false;
$error = "3";
}
// -------------------------------------------------------------------------------------------- Email//
if (!isset($email)) {// Comprueba que el email existe
	$validacion = false;
$error = "4"; 
}
if (strlen($email) < 6 or strlen($email) > 70 ) {//Comprueba que la longitud del email no es mayor de 70 ni menor de 6
	$validacion = false;
$error = "5";
}
if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/i", $email)){ // Comprueba que el formato de email es correcto
	$validacion = false;
$error = "6";
}
// --------------------------------------------------------------------------------------------Asunto//
if (!isset($subject)) { // Comprueba que el asunto existe
	$validacion = false;
$error = "7"; 
}
if(!preg_match("/^[a-zA-ZüÜáéíóúÁÉÍÓÚñÑ ]+$/", $name)) {//Comprueba que el asunto solo contiene letras mayusuculas y minusculas + tildes o espacios
	$validacion = false;
$error = "8"; 
}
if (strlen($name) < 2 or strlen($name) > 70 ) {//Comprueba que la longitud del asunto no es mayor de 70 ni menor de 2
	$validacion = false;
$error = "9";
}
// --------------------------------------------------------------------------------------------Mensaje//
if (!isset($message)) {// Comprueba que el mensaje existe
	$validacion = false;
$error = "13"; 
}
if (strlen($message) > 320 or strlen($message) < 1 ) {//Comprueba que la longitud del mensaje no es mayor de 320
	$validacion = false;
$error = "14";
}
if (!preg_match("/^$|^[0-9A-Za-z üÜáéíóúÁÉÍÓÚñÑ\(\)\.\?\¿,¡!;:a\r\nb\r\nc]+$/i", $message)){ // Comprueba que el formato del mensaje es correcto
	$validacion = false;
$error = "15";
}
// --------------------------------------------------------------------------------------------Nocaptcha Recaptcha//
$captcha = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LdOUAsUAAAAAMO9BQwE9TsIDDyYsBz0hP-LmqQm&response='.$_POST['g-recaptcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR']),TRUE); 
//$captcha = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LdwBxUTAAAAAMEcnZgNAL17WYzU9t1hSl4_zOiG&response='.$_POST['g-recaptcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR']),TRUE); 
    if($captcha['success']=== FALSE){ 
    	$validacion = false;
		$_SESSION['errorcaptcha'] = true;     
    }
// --------------------------------------------------------------------------------------------FIN CUERPO DE VALIDACIÓN//
if ($validacion == true) {
//mandamos mail a contacto
$contactmail = "mserrano_velazquez@hotmail.es";
$contenido_soli = "<b>Nombre:</b> ".$name."<br><br><b>Email:</b> ".$email."<br><br><b>Asunto:</b> ".$subject."<br><br><b>Mensaje:</b> ".$message;
$asuntomail="Contacto Formulario Web";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: ".$web_actual." <mserrano_velazquez@hotmail.es>\r\n";
$headers .= "Reply-To: mserrano_velazquez@hotmail.es\r\n";
$headers .= "Return-path: mserrano_velazquez@hotmail.es\r\n";
mail($contactmail,$asuntomail,$contenido_soli,$headers);//Envia el email
 //mail("mserrano_velazquez@hotmail.es","prueba ","Comprobando emails en servidor axarnet");
//fin mandar mail de contacto
// activar variable de sesion para mensaje de "enviado correctamente"
$_SESSION['sent'] = true;
// unset a todas las variables de sesion guardadas
unset($_SESSION['namec']);
unset($_SESSION['emailc']);
unset($_SESSION['subjectc']);
unset($_SESSION['messagec']); 
//header al formulario para mostrar mensaje de OK por variable de sesion
header("Location: /gracias.html/#roundo");
																					//foreach de comprobacion del $_POST 
																			      // foreach ($_POST as $key => $value) {
																			        // echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
																			      // }
} elseif ($validacion === false && $_SESSION['errorcaptcha'] === true) {
//header al index para mostrar mensaje de captcha invalido manteniendo campos
 header("Location: /gracias.html#roundo");
																				  //foreach de comprobacion del $_SESSION
																			      // foreach ($_SESSION as $key => $value) {
																			        // echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
																			      // }
} else {
	// header a la pagina de fallo
	header("Location: /error.php");
	// pintar errores(test)
	//echo $error;
}
?>