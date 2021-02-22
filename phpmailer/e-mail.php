<?php

//namespace Email;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once 'PHPMailer.php';
require_once 'SMTP.php';
require_once 'Exception.php';

class Email
{
    private $mail;
    const host      = 'mail.dominio.com.br';
    const username  = 'noreply@dominio.com.br';
    const name      = 'Suporte de Dominio';
    const password  = 'senhaDoEmail';
    const port      = 587;
    const secure    = 'tls';

    function __construct()
    {
        $this->setMail(new PHPMailer());
    }

    /**
     * Get mail
     *
     * @return PHPMailer 
     */
    private function getMail()
    {
        return ($this->mail);
    }

    /**
     * Set mail
     *
     * @param PHPMailer mail
     * @return mail
     */
    private function setMail($mail)
    {
        $this->mail = $mail;
        $mail->Debugoutput = 'html';
        $mail->setLanguage('pt');
        $mail->isHTML(true);
        $mail->isSMTP();
        $mail->SMTPDebug   = 0;
        $mail->CharSet     = 'utf-8';
        $mail->WordWrap    = 70;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->SMTPAuth   = true;
        $mail->Host       = self::host;
        $mail->Username   = self::username;
        $mail->Password   = self::password;
        $mail->Port       = self::port;
        $mail->SMTPSecure = self::secure;
        $mail->From       = self::username;
        $mail->FromName   = self::name;
        $mail->addCC('contato@dominio.com.br', 'Dominio');
    }

    /**
     * 
     * @param int value
     * SMTP::DEBUG_CLIENT (1): Output messages sent by the client.
     * SMTP::DEBUG_OFF (0): Disable debugging (you can also leave this out completely, 0 is the default).
     * SMTP::DEBUG_CLIENT (1): Output messages sent by the client.
     * SMTP::DEBUG_SERVER (2): as 1, plus responses received from the server (this is the most useful setting).
     * SMTP::DEBUG_CONNECTION (3): as 2, plus more information about the initial connection - this level can help diagnose STARTTLS failures.
     * SMTP::DEBUG_LOWLEVEL
     */
    public function setDebug(int $value)
    {
        $this->mail->SMTPDebug = $value;
    }

    /**
     * 
     * @param string email
     */
    public function setEmail(string $email)
    {
        $this->mail->addAddress($email);
    }

    /**
     * 
     * @param string email
     * @param string nome
     */
    public function setComCopia($nome = '', $email)
    {
        $this->mail->addReplyTo($email, $nome);
    }

    /**
     * @param string assunto
     */
    public function setAssunto(string $assunto)
    {
        $this->mail->Subject = $assunto;
    }

    /**
     * @param string $corpo
     */
    public function setCorpoEmail(string $corpo = null)
    {
        $this->mail->Body = $corpo;
    }


    public function Enviar()
    {
        $send = $this->mail->Send();

        if ($send) {
            echo "Email enviado com sucesso!";
            return true;
        } else
            throw new Exception("Não foi possivel enviar o email.");
    }

    /**
     * @param string nome
     * @param string email
     */
    public function setEmailPreCadastro($nome, $email, $senha)
    {
        $this->setEmail($email);
        $this->setAssunto("Confirmação de cadastro");
        $this->setCorpoEmail("
        <p>Olá, $nome </p>

        <p>
        Sua solicitação de pré-cadastro foi autorizada.<br/>
        Para acessar utilize o seu CPF e a senha: ".$senha.".<br/>
        Após o <i>login</i>, será apresentada uma tela para troca de senha.<br/>
        </p>

        <p>Foi atribuído o perfil correspondente à descrição e se houver necessidade de atribuir ou alterar o perfil, entre em contato conosco.</p>

        <p>Atenciosamente,<br/></p>
        <p>
        Equipe de suporte
        </p>
        ");
    }
}
