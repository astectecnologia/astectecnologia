<?php
// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.


if(!empty($_POST['assunto']) && !empty($_POST['conteudo'])){
	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/plain; charset= UTF-8\r\n";
	$headers .= "From: ".$_POST['email']."\r\n"; // remetente
	$headers .= "Return-Path: astec@gmail.com\r\n"; // return-path
	$envio = mail($value['nome'], $_POST['email'], $_POST['mensagem'], $headers);
}


if($envio){
	echo "A Mensagem Enviada Com Sucesso!";
	header("Location: index.html");
}else{
	echo "A Mensagem Não Pode Ser Enviada!";
	header("Location: index.html");
}

?>
