<!DOCTYPE html>
<?php require_once("../controller/ControListFornecedor.php");  ?>
<html lang="pt-br">
<meta charset="UTF-8">

<head>
    <meta charset="UTF-8">
    <title>RationTech - Insumos</title>
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap-reboot.css">
    <script language="javascript" src="_javascript/funcoes.js"></script>
</head>
<body>

<form method="post" action="../controller/ControllerCadastroInsumos.php">
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-4">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome" required>
        </div>
        <div class="form-group col-md-4">
            <label for="tipo">Tipo</label>
            <input type="text" name="tipo" class="form-control" placeholder="" required>
        </div>
    </div>
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-2">
            <label for="categoria">Categoria</label>
            <input type="text" name="categoria" class="form-control" placeholder="" required>
        </div>
        <div class="form-group col-md-2">
            <label for="custo">Custo</label>
            <input type="text" name="custo" class="form-control" placeholder="R$ 10,00" required>
        </div>
        <div class="form-group col-md-2">
            <label for="medida">Medida</label>
            <input type="text" name="medida" class="form-control" placeholder="10L" required>
        </div>
        <div class="form-group col-md-3">
            <label for="fornecedor_id"> Fornecedor
                <?php new listarFornecedor(); ?>
            </label>
            <br/><br/>
        </div>
    </div>
    <div class="form-row mt-2 ml-3">
        <div class="form-group mt-3 ml-3">
            <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
        </div>
        <div class="form-group mt-3 ml-3">
            <a href="../view/tela-principal.php?pg=index-insumos.php" class="btn btn-success">Listar Insumos</a>
        </div>
    </div>
</form>
</body>
</html>