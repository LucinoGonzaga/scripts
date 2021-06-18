<?php

$nome = 'Lucino Gonzaga';
$email = 'noreply@dominio.com.br';
$senha = 'secret';

require_once "email.php";
$enviar = new Email();
$enviar->setEmailPreCadastro($nome, $email, $senha);
$enviar->Enviar();

?>
