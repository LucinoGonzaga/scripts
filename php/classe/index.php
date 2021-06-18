<html>

<head>
    <title>Classe Caneta</title>
    <script type="javascript" src="../jquery/js/jquery-migrate-1.4.1.min.js">

        alert('oi');
</script>
</head>

<body>
    <?php
    require_once 'caneta.Class.php';
    $c1 = new Caneta;
    $c1->cor = "azul";
    $c1->ponta = 0.5;



    //chamando o metodo tampar
    $c1->tampar();
    //chamando o metodo rabiscar
    $c1->rabiscar();

    //print_r($c1);
    ?>

</body>

</html>