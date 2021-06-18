<?php

//classe caneta
class Caneta
{
    //Atributos da classe caneta
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    //Metodos rabiscar da classe caneta
    function rabiscar()
    {
        if ($this->tampada) {
            echo "<p>Erro! não posso rabiscar.</p>";
        } else {
            echo "<p>Estou rabiscando...</p>";
        }
    }

    //Metodos rabiscar da classe caneta
    function tampar()
    {
        $this->tampada = true;
    }

    function destampar()
    {
        $this->tampada = false;
    }
}
