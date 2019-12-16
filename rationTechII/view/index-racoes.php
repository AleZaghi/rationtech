<?php require_once("../controller/ControllerListarRacoes.php");?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rações</title>
</head>
<body>


<table class="table table-striped">
    <thead>
    <tr>
       <th scope="col">Animal</th>
        <th scope="col">Categoria</th>
        <th scope="col">Fase</th>
        <th scope="col">Data Fabricação</th>
        <th scope="col">Data Validade</th>

    </tr>
    </thead>

    <tbody>
    <?php new listarControllerRacoes();  ?>
    </tbody>
</table>

<?php include("menu.php"); ?>

</body>
</html>