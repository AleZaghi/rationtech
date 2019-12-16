<?php
require_once("../controller/ControllerEditarRacoes.php");
require_once("../controller/ControListCat.php");
require_once("../controller/ControListEsp.php");
require_once("../controller/ControListFase.php");
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Rações</title>
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap-reboot.css">
</head>
<body>

<form method="post" action="../controller/ControllerEditarRacoes.php">
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-4">
            <label for="datafab">Data Fabricação</label>
            <input type="date" name="datafab" class="form-control" value="<?php echo $editar->getDataFab(); ?>" required>  <br/><br/>
        </div>
        <div class="form-group col-md-4">
            <label for="dataval">Data Validade</label>
            <input type="date" name="dataval" class="form-control" value="<?php echo $editar->getDataVal(); ?>" required>  <br/><br/>
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
    <div class="form-group mt-3 ml-3">
        <input type="hidden" name="id" value="<?php echo $editar->getIdRacao();?>">  <br/><br/>
        <button type="submit" name="submit" class="btn btn-success" value="editar">Editar</button>  <br/>
    </div>
</form>

</body>
</html>