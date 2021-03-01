<?php
class File{
    function msg()
    {
        echo "Olá mundo!<br />";
        require_once('email.php');

        $email = new Email;
        $email->enviar();
    }
}
?>