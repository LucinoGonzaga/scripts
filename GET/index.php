<?php

//Aqui definimos as variáveis com os valores que desejamos enviar
$dado['1'] = crypt("10");
$dado['2'] = "Lucino";
$dado['3'] = "lucino2@gmail.com";
 
//variável Array responsável por agrupar os dados a serem enviados
$dados = array($dado['1'],$dado['2'],$dado['3']);
 
echo "<pre>";
var_dump($dados);
echo "</pre>";

//URL para onde vai ser enviado nosso POST
$url = "http://www.lucino.com.br/recebe.php";
 
echo $url;
// Aqui inicio a função CURL
//$curl = curl_init();
//aqu eu pego a URL para onde será enviado o POST
//curl_setopt($curl, CURLOPT_URL, $url);
//curl_setopt($curl, CURLOPT_HEADER, 0);
//curl_setopt($curl, CURLOPT_POST, 1);
//aqui eu pego os dados para enviar via POST
//curl_setopt($curl, CURLOPT_POSTFIELDS, $dados);
//curl_exec($curl);
//curl_close($curl);
 
?>