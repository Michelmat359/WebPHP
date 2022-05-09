<?php session_start();
if(isset($_POST['submit'])) {
$youremail = 'lmoya43@alu.ucam.edu';
$fromsubject = 'Contacto desde la Web';
$name = $_POST['name'];
$mail = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to = $youremail;
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type:text/html; charset=UTF-8' . "\r\n";
$headers .= "From: ".$_POST['name']."<".$_POST['Email'].">\r\n";
$headers .= "Reply-To: ".$_POST["email"]."\r\n";
$mailsubject = 'Messsage enviado por '.$fromsubject.' Pagina contacto';
$body = $fromsubject.'

	La persona que te contacta es  '.$name.'
	 Email: '.$mail.'
	 Asunto: '.$subject.'

	 Mensaje:
	 '.$message.'
	|---------END MESSAGE----------|';
echo "Gracias por tu correo, Contactaremos contrigo pronto. <br/>Ir a <a href='/index.html'>Inicio</a>";
								mail($to, $subject, $body,$headers);
 } else {
echo "Debes escribir un correo. </br> Por favor ve a <a href='/index.html'>Inicio</a>";
}
?>