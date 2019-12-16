<!DOCTYPE html>
<?php require_once("../controller/ControListEstado.php");?>
<?php require_once("../controller/ControListCidade.php");?>
<?php require_once("../controller/ControListLogradouro.php");?>
<html lang="pt-br">
<meta charset="UTF-8">
<head>
    <title>RationTech - Usuários</title>
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap-reboot.css">
    <script language="javascript" src="_javascript/funcoes.js"></script>
</head>
<body>

<form method="post" action="../controller/ControllerCadastroUsuarios.php">
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-4">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome" required>
        </div>
        <div class="form-group col-md-3">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" class="form-control" placeholder="123.346.789-10" required>
        </div>
    </div>
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-2">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" class="form-control" placeholder="(66)99999-9999" required>
        </div>
        <div class="form-group col-md-3">
            <label for="email">E-mail</label>
            <input type="text" name="email" class="form-control" placeholder="mail@mail" required>
        </div>
        <div class="form-group col-md-2">
            <label for="cargo">Cargo</label>
            <input type="text" name="cargo" class="form-control" placeholder="Cargo" required>
        </div>
    </div>
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-3">
            <label for="login">Login</label>
            <input type="text" name="login" class="form-control" placeholder="login" required>
        </div>
        <div class="form-group col-md-2">
            <label for="senha">Senha</label>
            <input type="text" name="senha" class="form-control" placeholder="Senha" required>
        </div>
        <div class="form-group col-md-2">
            <label for="confsenha">Confirmar Senha</label>
            <input type="text" name="confsenha" class="form-control" placeholder="Confirme sua Senha" required>
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
        <div class="form-group col-md-2">
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
            <label for="cep">Cep</label>
            <input type="text" name="cep" class="form-control" placeholder="70.000-000" required>
        </div>
    </div>
    <div class="form-row mt-2 ml-3">
        <div class="form-group mt-3 ml-3">
            <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
        </div>
        <div class="form-group mt-3 ml-3">
            <a href="../view/tela-principal.php?pg=index-usuarios.php" class="btn btn-success">Listar Usuários</a>
        </div>
    </div>
</form>
</body>
</html>