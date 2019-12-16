<!DOCTYPE html>
<?php require_once("../controller/ControListCat.php");?>
<?php require_once("../controller/ControListEsp.php");?>
<?php require_once("../controller/ControListFase.php");?>

<html lang="pt-br">
<meta charset="UTF-8">

<head>
    <meta charset="UTF-8">
    <title>RationTech - Animais</title>
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap-reboot.css">
    <script language="javascript" src="_javascript/funcoes.js"></script>
</head>
<body>

<form method="post" action="../controller/ControllerCadastro.php">
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-4">
            <label for="an">Animal</label>
            <input type="text" name="animal" class="form-control"  placeholder="Animal" required><br/><br/>
        </div>
        <div class="form-group col-md-4">
            <label for="cat">Categoria
            <?php new listarCategoria();  ?>
            </label>
        </div>
    </div>
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-2">
            <label for="esp">Espécie
            <?php new listarEspecie();  ?>
            </label>
        </div>
        <div class="form-group col-md-2">
            <label for="fas">Fase
            <?php new listarFase();  ?>
            </label>
        </div>
        <div class="form-group col-md-2">
            <label for="obs">Observação</label>
            <input type="text" name="obs" class="form-control" placeholder="Observação" required><br/><br/>
        </div>
    </div>
    <div class="form-row mt-2 ml-3">
        <div class="form-group mt-3 ml-3">
            <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
        </div>
        <div class="form-group mt-3 ml-3">
            <a href="../view/tela-principal.php?pg=index-animais.php" class="btn btn-success">Listar Animais</a>
        </div>
    </div>
</form>
</body>
</html>