<!--Nesse exemplo testei o envio de valores de uma variavel via get para outro servidor. -->
<html>
<head>
    <title>Testando função header</title>
</head>

<body>
    <script language="javascript">alert("Clique em ok para finalizar operação.")</script>
    <?php
    header("Refresh: 0; url='http://localhost/scripts/header/recebe.php?id=123&chave=brasil&tp=65aFD'>aqui</a> para enviarmos o email.");
    exit();
     ?> 
</body>
</html>