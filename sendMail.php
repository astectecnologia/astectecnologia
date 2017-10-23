<?php
// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
session_start();

if(!empty($_POST['assunto']) && !empty($_POST['conteudo'])){
	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/plain; charset= UTF-8\r\n";
	$headers .= "From: astec@gmail.com\r\n"; // remetente
	$headers .= "Return-Path: astec@gmail.com\r\n"; // return-path
	$envio = mail("franciscojerlison1@gmail.com", $_POST['subject'], $_POST['mensagem'], $headers);
}


if($envio){
	$_SESSION['sent'] = 'success';
	header("Location: index.php");
}else{
	$_SESSION['sent'] = 'fail';
	header("Location: index.php");
}

?>
