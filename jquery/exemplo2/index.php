<html>

<head>
    <title>Exemplo para desabilitar tabela</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>


<body>
    <table align="center">
        <tr>
            <td colspan="3" align="center">
                <b>Selecione o formtado:</b>
            </td>
        </tr>
        <tr>
            <td>
                <form action="pagina2.php" method="POST" name="situacao">
                    <select name="situacao">
                        <option value="habilitado">Habilitado</option>
                        <option value="desabilitado">Desabilitado</option>
                    </select>
                    <input type="submit" value="Verificar">
                </form>
            </td>
        </tr>
    </table>

</body>

</html>