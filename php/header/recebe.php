<!--Nesse exemplo testei o recebimento de valores recebidos em uma URL de outro servidor. -->
<html>
<head>
    <title>Testando função header</title>
</head>
<body>
<?php

$id     = $_GET['id'];
$chave  = $_GET['chave'];
$tp     = $_GET['tp'];

echo "Foram recebidos os dados: <br /><br />";
echo $id."<br />";
echo $chave."<br />";
echo $tp."<br />";


?>

</body>
</html>