<!DOCTYPE html>
<?php require_once("../controller/ControListCat.php");?>
<?php require_once("../controller/ControListEsp.php");?>
<?php require_once("../controller/ControListFase.php");?>

<html lang="pt-br">
<meta charset="UTF-8">

<head>
    <meta charset="UTF-8">
    <title>RationTech - Rações</title>
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap-reboot.css">
    <script language="javascript" src="_javascript/funcoes.js"></script>
</head>
<body>

<form method="post" action="../controller/ControllerCadastroRacoes.php">
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-2">
            <label for="datafab">Data Fabricação</label>
            <input type="date" name="datafab" class="form-control"  placeholder="01/01/2001" required>
        </div>
        <div class="form-group col-md-2">
            <label for="dataval">Data Validade</label>
            <input type="date" name="dataval" class="form-control"  placeholder="01/01/2002" required>
        </div>
    </div>
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-2">
            <label for="especie">Animal
                <?php new listarEspecie();  ?>
            </label>
        </div>
        <div class="form-group col-md-2">
            <label for="categoria">Categoria
                <?php new listarCategoria();  ?>
            </label>
        </div>
        <div class="form-group col-md-2">
            <label for="fase">Fase
                <?php new listarFase();  ?>
            </label>
        </div>
    </div>
    <div class="form-row mt-2 ml-3">
        <div class="form-group mt-3 ml-3">
            <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
        </div>
        <div class="form-group mt-3 ml-3">
            <a href="../view/tela-principal.php?pg=index-racoes.php" class="btn btn-success">Listar Rações</a>
        </div>
    </div>
</form>
</body>
</html>