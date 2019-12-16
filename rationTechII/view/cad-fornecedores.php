<!DOCTYPE html>

<?php require_once("../controller/ControListEstado.php");?>
<?php require_once("../controller/ControListCidade.php");?>
<?php require_once("../controller/ControListLogradouro.php");?>

<html lang="pt-br">
<meta charset="UTF-8">

<head>
    <title>RationTech - Fornecedores</title>
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap-reboot.css">
    <script language="javascript" src="_javascript/funcoes.js"></script>
</head>
<body>

<form method="post" action="../controller/ControllerCadastroFornecedores.php">
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-4">
            <label for="nomefantasia">Nome Fantasia</label>
            <input type="text" name="nomefantasia" class="form-control"  placeholder="Nome Fantasia" required>
        </div>
        <div class="form-group col-md-4">
            <label for="razaosocial">Razão Social</label>
            <input type="text" name="razaosocial" class="form-control" placeholder="Razão Social" required>
        </div>
    </div>
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-3">
            <label for="cnpj">CNPJ</label>
            <input type="text" name="cnpj" class="form-control" placeholder="11.222.333/4444-55" required>
        </div>
        <div class="form-group col-md-2">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" class="form-control" placeholder="(66)3419-3419" required>
        </div>
        <div class="form-group col-md-3">
            <label for="email">E-mail</label>
            <input type="text" name="email" class="form-control" placeholder="empresa@empresa" required>
        </div>
    </div>
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-3">
            <label for="logradouro">Logradouro
                <?php new listarLogradouro();  ?>
            </label>
        </div>
        <div class="form-group col-md-3">
            <label for="rua"></label>
            <input type="text" name="rua" class="form-control" placeholder="Das Orquideas" required>
        </div>
        <div class="form-group col-md-2">
            <label for="numero">Nº</label>
            <input type="text" name="numero" class="form-control" placeholder="123" required>
        </div>
        <div class="form-group col-md-2">
            <label for="complemento">Complemento</label>
            <input type="text" name="complemento" class="form-control" placeholder="" required>
        </div>
    </div>
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-3">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" class="form-control" placeholder="Bairro" required>
        </div>
        <div class="form-group col-md-2">
            <label for="uf">UF
                <?php new listarEstado();  ?>
            </label>
        </div>
        <div class="form-group col-md-3">
            <label for="cidade">Cidade
                <?php new listarCidade();  ?>
            </label>
        </div>
        <div class="form-group col-md-2">
            <label for=cep>Cep</label>
            <input type="text" name="cep" class="form-control" placeholder="70.000-000" required>
        </div>
    </div>
    <div class="form-row mt-2 ml-3">
        <div class="form-group mt-3 ml-3">
            <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
        </div>
        <div class="form-group mt-3 ml-3">
            <a href="../view/tela-principal.php?pg=index-fornecedores.php" class="btn btn-success">Listar Fornecedores</a>
        </div>
    </div>
</form>
</body>
</html>