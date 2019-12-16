<?php
require_once ("../model/conf.php");
require_once ("../model/verificarLogin.php");
require_once ("../model/operacoesBancoUsuarios.php");

$login = getDados($conexao, $_POST["login"], $_POST["senha"]);
if($login == null) {
    $_SESSION["danger"] = "Usuário ou senha inválido.";
    header("Location: index.php");
} else {
    $_SESSION["success"] = "Usuário logado com sucesso.";
    logaUsuario($usuario["email"]);
    header("Location: index.php");
}
die();