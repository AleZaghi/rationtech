<?php
require_once("conf.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste PHP - AJAX</title>

    <!-- INCLUIR SCRIPT JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- CRIAR FUNÇÃO PARA PEGAR O ID DO CAMPO SELECIONADO -->
    <script type="text/javascript">
        function getCidadeUF(val)
        {
            $('#loadingmessage').show();

            $.ajax({
                type: 'post',
                url: 'retornaCidades.php',
                data: {
                    ufSelecionada:val
                },
                success: function (response) {
                    $('#loadingmessage').hide();
                    document.getElementById("sl_cidades").innerHTML=response;
                }
            });
        }
    </script>


</head>
<body>

<form>
    <!-- CHAMAR O MÉTODO QUE MONTA A LISTAGEM DAS UF´S -->
    <!-- INCLUIR A CHAMADA DA FUNÇÃO JAVASCRIPT PARA PEGAR O ID DA UF SELECIONADA -->
    <select  onchange="getCidadeUF(this.value);">
        <option value="">---</option>
        <?php
        $minhaQuery = "SELECT * FROM uf";
        $resultado = $conexao->query($minhaQuery);

        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_assoc())
            {
                echo "<option value=".$row['id_uf'].">".$row['uf']."</option>";
            }
        }
        ?>
    </select>


    <div id='loadingmessage' style='display:none'>
        <img src='carregandoV1.gif' width="80" height="50"/>
    </div>
    <!-- LISTA DE CIDADE QUE SERÁ RENDERIZADA DE ACORDO COM O ID DA UF SELECIONADA -->
    <select id="sl_cidades">
    </select>

    <br>
    <input type="submit" name="search" value="Buscar"/>

</form>
</body>
</html>