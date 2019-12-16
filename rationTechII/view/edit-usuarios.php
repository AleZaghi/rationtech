<?php
require_once("../controller/ControllerEditarUsuarios.php");
require_once("../controller/ControListLogradouro.php");
require_once("../controller/ControListCidade.php");
require_once("../controller/ControListEstado.php");
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Usuários</title>
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap-reboot.css">
</head>
<body>

<form method="post" action="../controller/ControllerEditarUsuarios.php">
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-4">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" value="<?php echo $editar->getNome(); ?>" required>
        </div>
        <div class="form-group col-md-4">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" class="form-control" value="<?php echo $editar->getCpf(); ?>" required>  <br/><br/>
        </div>
    </div>
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-2">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" class="form-control" value="<?php echo $editar->getTelefone(); ?>" required>
        </div>
        <div class="form-group col-md-3">
            <label for="email">E-mail</label>
            <input type="text" name="email" class="form-control" value="<?php echo $editar->getEmail(); ?>" required>
        </div>
        <div class="form-group col-md-2">
            <label for="cargo">Cargo</label>
            <input type="text" name="cargo" class="form-control" value="<?php echo $editar->getCargo(); ?>" required>
        </div>
    </div>
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-3">
            <label for="login">Login</label>
            <input type="text" name="login" class="form-control" value="<?php echo $editar->getLogin(); ?>" required>
        </div>
        <div class="form-group col-md-2">
            <label for="senha">Senha</label>
            <input type="text" name="senha" class="form-control" value="<?php echo $editar->getSenha(); ?>" required>
        </div>
        <div class="form-group col-md-2">
            <label for="confsenha">Confirmar Senha</label>
            <input type="text" name="confsenha" class="form-control" value="<?php echo $editar->getConfSenha(); ?>" required>
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
            <input type="text" name="rua" class="form-control" value="<?php echo $editar->getRua(); ?>" required>
        </div>
        <div class="form-group col-md-2">
            <label for="numero">Número</label>
            <input type="text" name="numero" class="form-control" value="<?php echo $editar->getNumero(); ?>" required>
        </div>
        <div class="form-group col-md-2">
            <label for="complemento">Complemento</label>
            <input type="text" name="complemento" class="form-control" value="<?php echo $editar->getComplemento(); ?>" required>
        </div>
    </div>
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-3">
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
        <div class="form-group col-md-3">
            <label for="cep">Cep</label>
            <input type="text" name="cep" class="form-control" value="<?php echo $editar->getCep(); ?>" required>
        </div>
    </div>
    <div class="form-group mt-3 ml-3">
        <input type="hidden" name="id" value="<?php echo $editar->getIdUsuario();?>">  <br/><br/>
        <button type="submit" name="submit" class="btn btn-success" value="editar">Editar</button>  <br/>
    </div>
</form>

</body>
</html>