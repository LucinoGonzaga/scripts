<?php

function __autoload($name)
{
    $existe = file_exists($name.'.php');
    if ($existe) {
        include_once($name.'.php');
        return;
    }
    // Classe não encontrada...
    die("Classe <b>$name</b> não encontrada");
}
