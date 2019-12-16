<?php require_once("../controller/ControllerListar.php");?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Animais</title>
</head>
<body>


<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Animal</th>
            <th scope="col">Categoria</th>
            <th scope="col">Espécie</th>
            <th scope="col">Fase do Crescimento</th>
            <th scope="col">Observação</th>
        </tr>
    </thead>

    <tbody>
    <?php new listarController();  ?>
    </tbody>
</table>

<?php include("menu.php"); ?>

</body>
</html>