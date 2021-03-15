<html>

<head>
    <title>Exemplo para desabilitar tabela</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>
<?php
$situacao = $_POST['situacao'];
?>

<body>
    <table width="50%" align="center">
        <tr>
            <td colspan="3" align="center">
                <b>Entre com os dados:</b>
            </td>
        </tr>
        <tr <?php if($situacao=='desabilitado'){echo "class='situacao'";} ?>>
            <td>
                <input type="text" id="campo">
            </td>
            <td>
                <input type="text" id="campo2" name="campo2" value="campo 2">
            </td>
        </tr>
        <tr <?php if($situacao=='desabilitado'){echo "class='situacao'";} ?>>
            <td>
                <input type="text" id="campo" name="campo">
            </td>
            <td>
                <input type="text" id="campo2" name="campo2" value="campo 2">
            </td>
        </tr>
        <tr <?php if($situacao=='desabilitado'){echo "class='situacao'";} ?>>
            <td>
                <input type="text" id="campo" name="campo">
            </td>
            <td>
                <input type="text" id="campo2" name="campo2" value="campo 2">
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <b><a href="index.php">Voltar</a></b>
            </td>
        </tr>
    </table>

</body>

</html>