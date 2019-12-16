<?php
require_once("../controller/ControllerEditarForcenedores.php");
require_once("../controller/ControListLogradouro.php");
require_once("../controller/ControListCidade.php");
require_once("../controller/ControListEstado.php");
?>
<html>
<head>
    <title>Editar Fornecedores</title>
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap-reboot.css">
</head>
<body>

<form method="post" action="../controller/ControllerEditarFornecedores.php">
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-4">
            <label for="nomefantasia">Nome Fantasia</label>
            <input type="text" name="nomefantasia" class="form-control" value="<?php echo $editar->getNomeFantasia(); ?>" required>
        </div>
        <div class="form-group col-md-4">
            <label for="razaosocial">Razão Social</label>
            <input type="text" name="razaosocial" class="form-control" value="<?php echo $editar->getRazaoSocial(); ?>" required>
        </div>
    </div>
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-2">
            <label for="cnpj">CNPJ</label>
            <input type="text" name="cnpj" class="form-control" value="<?php echo $editar->getCnpj(); ?>" required>
        </div>
        <div class="form-group col-md-2">
            <label for="telefone">Tefefone</label>
            <input type="text" name="telefone" class="form-control" value="<?php echo $editar->getTelefone(); ?>" required>
        </div>
        <div class="form-group col-md-2">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $editar->getEmail(); ?>" required>
        </div>
    </div>
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-2">
            <label for="logradouro">Logradouro
                <?php new listarLogradouro();  ?>
            </label>
        </div>
        <div class="form-group col-md-3">
            <label for="rua"></label>
            <input type="text" name="rua" class="form-control" value="<?php echo $editar->getRua(); ?>" required>
        </div>
        <div class="form-group col-md-2">
            <label for="numero">Nº</label>
            <input type="text" name="numero" class="form-control" value="<?php echo $editar->getNumero(); ?>" required>
        </div>
        <div class="form-group col-md-2">
            <label for="complemento">Complemento</label>
            <input type="text" name="complemento" class="form-control" value="<?php echo $editar->getComplemento(); ?>" required>
        </div>
    </div>
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-2">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" class="form-control" value="<?php echo $editar->getBairro(); ?>" required>
        </div>
        <div class="form-group col-md-3">
            <label for="uf">UF
                <?php new listarEstado();  ?>
            </label>
            <br/><br/>
        </div>
        <div class="form-group col-md-3">
            <label for="cidade">Cidade
                <?php new listarCidade();  ?>
            </label>
            <br/><br/>
        </div>
        <div class="form-group col-md-2">
            <label for="cep">Cep</label>
            <input type="text" name="cep" class="form-control" value="<?php echo $editar->getCep(); ?>" required>
        </div>
    </div>
    <div class="form-group mt-3 ml-3">
        <input type="hidden" name="id" value="<?php echo $editar->getIdFornecedor();?>">  <br/><br/>
        <button type="submit" name="submit" class="btn btn-success" value="editar">Editar</button>  <br/>
    </div>
</form>

</body>
</html>