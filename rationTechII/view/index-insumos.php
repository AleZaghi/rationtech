<?php require_once("../controller/ControllerListarInsumos.php");?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Insumos</title>
</head>
<body>


<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Nome</th>
        <th scope="col">Tipo</th>
        <th scope="col">Categoria</th>
        <th scope="col">Custo</th>
        <th scope="col">Medida</th>
        <th scope="col">Data Entrada</th>
        <th scope="col">Fornecedor</th>
    </tr>
    </thead>

    <tbody>
    <?php new listarControllerInsumos();  ?>
    </tbody>
</table>

<?php include("menu.php"); ?>

</body>
</html>