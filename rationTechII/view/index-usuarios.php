<?php require_once("../controller/ControllerListarUsuarios.php");?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Usuários</title>
</head>
<body>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Telefone</th>
            <th scope="col">E-mail</th>
            <th scope="col">Cargo</th>
            <th scope="col">Logradouro</th>
            <th scope="col">Rua</th>
            <th scope="col">Nº</th>
            <th scope="col">Complemento</th>
            <th scope="col">Bairro</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>
            <th scope="col">Cep</th>
            <th scope="col">Login</th>
        </tr>
    </thead>

    <tbody>
    <?php new listarControllerUsuarios();  ?>
    </tbody>
</table>

<?php include("menu.php"); ?>

</body>
</html>