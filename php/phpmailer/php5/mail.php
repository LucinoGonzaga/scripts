<?php

$nome = "nome do contato";
$email = "mail.contato.com.br";
$mensage = "mensagem do contato";


require 'class.phpmailer.php';
require 'class.smtp.php';


$mail = new PHPMailer();
$mail->setLanguage('pt');


$mail->SMTPAuth   = true;
$mail->IsSMTP(); 
$mail->Host = "localhost";
$mail->Username = "noreply@domain.com.br";
$mail->Password = "senha"; 
$mail->Port = "587"; 
$mail->Secure = "tls";
$mail->From = "noreply@domain.com.br";
$mail->FromName = "NOME";
$mail->Name = "NOME"; 
$mail->IsHTML(true);
$mail->Subject = "Contato";
$mail->Body = 'Houve uma interação de contato.<br/><br/>'
    . '<b>IP: </b> ' . $_SERVER["REMOTE_ADDR"] . '<br/>'
    . '<b>Horário: </b> ' . date("d/m/Y - H:i") . '<br/>'
    . '<b>Nome: </b>' . $nome . '<br/> '
    . '<b>E-mail: </b>' . $email . '<br/>'
    . '<b>Mensagem: </b>' . $mensage;
$mail->Body = utf8_decode($mail->Body);
$mail->AltBody = $mensage . "<br />";
$mail->AddAddress('contato@domain.com.br');
$mail->addBCC('copia@domain.com.br');
$enviado1 = $mail->Send();

// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

$mail->ClearAddresses();
$mail->AddAddress($email);
$mail->CharSet = 'utf-8';
$mail->Subject = "Assunto da mensagem";
$mail->Body = "Agradecemos a interação. Em breve entraremos em contato.<br />";
$mail->AltBody = "Agradecemos a interação. Em breve entraremos em contato.<br />";
$enviado2 = $mail->Send();

// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

if ($enviado1 && $enviado2) {
    echo "E-mail enviado com sucesso!";
    exit();
} else {
    echo "Não foi possivel enviar o email, tente novamente mais tarde.";
    exit();
}

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
