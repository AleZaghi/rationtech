<?php
require_once("../controller/ControllerEditar.php");
require_once("../controller/ControListCat.php");
require_once("../controller/ControListEsp.php");
require_once("../controller/ControListFase.php");
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Editar Animais</title>
        <link rel="stylesheet" type="text/css" href="../_css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../_css/bootstrap-grid.css">
        <link rel="stylesheet" type="text/css" href="../_css/bootstrap-reboot.css">
    </head>
<body>

    <form method="post" action="../controller/ControllerEditar.php">
        <div class="form-row mt-3 ml-3">
            <div class="form-group col-md-4">
                <label for="an">Animal</label>
                <input type="text" name="animal" class="form-control" value="<?php echo $editar->getAnimal(); ?>" required>  <br/><br/>
            </div>
            <div class="form-group col-md-4">
                <label for="cat">Categoria
                <?php new listarCategoria();  ?>
                </label>
                <br/><br/>
            </div>
        </div>
        <div class="form-row mt-3 ml-3">
            <div class="form-group col-md-2">
                <label for="esp">Espécie
                <?php new listarEspecie();  ?>
                </label>
                <br/><br/>
            </div>
            <div class="form-group col-md-2">
                <label for="fas">Fase
                <?php new listarFase();  ?>
                </label>
                <br/><br/>
            </div>
            <div class="form-group col-md-2">
                <label for="obs">Observação</label>
                <input type="text" name="obs" class="form-control" value="<?php echo $editar->getObs(); ?>" required>  <br/><br/>
            </div>
        </div>
        <div class="form-group mt-3 ml-3">
            <input type="hidden" name="id" value="<?php echo $editar->getId();?>">  <br/><br/>
            <button type="submit" name="submit" class="btn btn-success" value="editar">Editar</button>  <br/>
        </div>
    </form>

</body>
</html>