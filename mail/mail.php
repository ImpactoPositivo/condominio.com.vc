<?php

$name       = $_POST['name'];
$email      = $_POST['email'];
$phone      = $_POST['phone'];
$date       = $_POST['date'];
$time       = $_POST['time'];
$message    = $_POST['message'];
$from       = 'contato@condominiocomvoce.com.br';


echo $name.'</br>';
echo $email.'</br>';
echo $phone.'</br>';
echo $date.'</br>';
echo $time.'</br>';
echo $message.'</br>';


$Headers      = "MIME-Version: 1.1\n";
$Headers     .= "Content-type: text/html; charset=utf-8\n";
$Headers     .= "From: condominio.com.vc <$From>\n";
$Headers     .= "Return-Path: $From\n";
$Headers     .= "Reply-to: $email\n";

mail($email, $Assunto, $mensagem, $Headers, $From);
header('Location:obrigado.html');

?>


