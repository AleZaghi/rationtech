<?php require_once("../controller/ControllerListarFornecedores.php");?>
<html>
<head>
    <title>Fornecedores</title>
</head>
<body>


<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Razão Social</th>
        <th scope="col">Nome Fantasia</th>
        <th scope="col">CNPJ</th>
        <th scope="col">Telefone</th>
        <th scope="col">E-mail</th>
        <th scope="col">Logradouro</th>
        <th scope="col">Rua</th>
        <th scope="col">Nº</th>
        <th scope="col">Complemento</th>
        <th scope="col">Bairro</th>
        <th scope="col">Cidade</th>
        <th scope="col">Estado</th>
        <th scope="col">Cep</th>
    </tr>
    </thead>

    <tbody>
    <?php new listarControllerFornecedores();  ?>
    </tbody>
</table>

<?php include("menu.php"); ?>

</body>
</html>