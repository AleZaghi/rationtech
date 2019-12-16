<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../_css/estilo-tela_principal.css" >
    <script language="javascript" src="_javascript/funcoes.js"></script>

    <title>RationTech</title>
</head>
<body>
<input type="checkbox" id="check">
<label id="icone" for="check"><img src="../_imagens/icone.png"></label>



<div class="barra">
    <nav>
        <a href="tela-principal.php" class="active" rel="nofollow"><div class="link">Home</div></a>
        <a href="?pg=cad-usuarios.php" class="active" rel="nofollow" ><div class="link">Usuários</div></a>
        <a href="?pg=cad-animais.php" class="active" rel="nofollow"><div class="link">Animais</div></a>
        <a href="?pg=cad-formulas.php" class="active" rel="nofollow"><div class="link">Fórmulas</div></a>
        <a href="?pg=cad-insumos.php" class="active" rel="nofollow"><div class="link">Insumos</div></a>
        <a href="?pg=cad-fornecedores.php" class="active" rel="nofollow"><div class="link">Fornecedores</div></a>
        <a href="?pg=cad-racoes.php" class="active" rel="nofollow"><div class="link">Rações</div></a>
        <a href="?pg=cad-relatorios.php" class="active" rel="nofollow"><div class="link">Relatórios</div></a>
    </nav>
</div>
<header>
    <a href="https://www.google.com/search?q=zootecnia&rlz=1C1SQJL_pt-BRBR832BR832&source=lnms&tbm=nws&sa=X&ved=0ahUKEwjnsqPK8bHiAhV7HrkGHZJNAhwQ_AUIDygC&biw=1280&bih=578" target="_blank"><img src="../_imagens/novidades-peq.png"></a>
</header>
<div class="outer-pages">
    <?php
    $pg = ( isset( $_GET['pg'] )) ? $_GET['pg'] : null;  /*Verifica se a variável $pg tem algum valor, se não... Atribui um valor defalt pra variável */

    if ($pg==''){
        include ('home.php');
    }elseif (file_exists($pg)){
        include $pg;
    } else {
        include "tela-principal.php";    /*Aqui ele vai chamar a página de erro.. Coloque a sua...*/
    }
    ?>
</div>
<div class="footer">
    <p>&copy;Copyright 2019 por Alexandra Zaghi e Vanessa Dacheri</p>
</div>
</body>
</html>