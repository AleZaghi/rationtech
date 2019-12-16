<?php require_once("../controller/ControllerEditarInsumos.php"); ?>
<?php require_once("../controller/ControListFornecedor.php"); ?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Insumos</title>
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap-reboot.css">
</head>
<body>

<form method="post" action="../controller/ControllerEditarInsumos.php">
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-4">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" value="<?php echo $editar->getNome(); ?>" required>  <br/><br/>
        </div>
        <div class="form-group col-md-4">
            <label for="tipo">Tipo</label>
            <input type="text" name="tipo" class="form-control" value="<?php echo $editar->getTipo(); ?>" required>  <br/><br/>
        </div>
    </div>
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-2">
            <label for="categoria">Categoria</label>
            <input type="text" name="categoria" class="form-control" value="<?php echo $editar->getCategoria() ?>" required>  <br/><br/>
        </div>
        <div class="form-group col-md-2">
            <label for="custo">Custo</label>
            <input type="text" name="custo" class="form-control" value="<?php echo $editar->getCusto(); ?>" required>  <br/><br/>
        </div>
        <div class="form-group col-md-2">
            <label for="medida">Medida</label>
            <input type="text" name="medida" class="form-control" value="<?php echo $editar->getMedida(); ?>" required>  <br/><br/>
        </div>
        <div class="form-group col-md-3">
            <label for="fornecedor_id"> Fornecedor
                <?php new listarFornecedor(); ?>
            </label>
            <br/><br/>
        </div>
    </div>
    <div class="form-group mt-3 ml-3">
        <input type="hidden" name="id" value="<?php echo $editar->getIdInsumo(); ?>">  <br/><br/>
        <button type="submit" name="submit" class="btn btn-success" value="editar">Editar</button>  <br/>
    </div>
</form>

</body>
</html>