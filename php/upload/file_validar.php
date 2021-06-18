<?php

//Recebe o arquivo via POST
$file_name = $_FILES["file"];


//Exibe as informações do arquivo
echo "O arquivo: <font color='#FF0000'>".$file. "</font> tem o tamanho de <font color='#FF0000'>" . filesize($file) . "</font> bytes<br /><br />";
echo "<a href='file_upload.html'>Voltar</a>"
?>
