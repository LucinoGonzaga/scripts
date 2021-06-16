<html>

<head>
    <title>Veirificar tamanho de arquivo</title>
    <script>
        Filevalidation = () => {
            const fi = document.getElementById('arquivo');
            //Verifique se algum arquivo está selecionado. 
            if (fi.files.length > 0) {
                for (const i = 0; i <= fi.files.length - 1; i++) {
                    const fsize = fi.files.item(i).size;
                    const file = Math.round((fsize / 1024));
                    if (file >= 4096) { //Tamanho do arquivo.
                        alert(
                            "Arquivo grande, por favor selecione um arquivo menor que 4 Mb.");
                    } else if (file < 2048) { //Tamanho do arquivo.
                        alert(
                            "Arquivo pequeno, por favor selecione um arquivo maior que 2 Mb.");
                    } else {
                        document.getElementById('size').innerHTML = '<b>' +
                            file + '</b> KB';
                    }
                }
            }
        }
    </script>
</head>
<body>
    <input type="file" id="arquivo" onchange="Filevalidation()" />
</body>
</html>