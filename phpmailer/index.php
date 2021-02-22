<?php

$nome = 'Lucino Gonzaga';
$email = 'lucino2@gmail.com';
$senha = 'abc123';

require_once "email.php";
$enviar = new Email();
$enviar->setEmailPreCadastro($nome, $email, $senha);
$enviar->Enviar();

?>