<?php
require_once("../model/modelCadastroUsuarios.php");

class cadUsuariosController{

    private $cadastroUsu;

    public function __construct()
    {
        $this->cadastroUsu = new cadUsuarios();
        $this->incluirUsuarios();
    }

    private function incluirUsuarios()
    {
        $this->cadastroUsu->setCpf         ($_POST['cpf']);
        $this->cadastroUsu->setNome        ($_POST['nome']);
        $this->cadastroUsu->setTelefone    ($_POST['telefone']);
        $this->cadastroUsu->setEmail       ($_POST['email']);
        $this->cadastroUsu->setCargo       ($_POST['cargo']);
        $this->cadastroUsu->setConfSenha   ($_POST['confsenha']);
        $this->cadastroUsu->setRua         ($_POST['rua']);
        $this->cadastroUsu->setLogradouro  ($_POST['logradouro']);
        $this->cadastroUsu->setNumero      ($_POST['numero']);
        $this->cadastroUsu->setComplemento ($_POST['complemento']);
        $this->cadastroUsu->setBairro      ($_POST['bairro']);
        $this->cadastroUsu->setCidade      ($_POST['cidade']);
        $this->cadastroUsu->setUf          ($_POST['uf']);
        $this->cadastroUsu->setCep         ($_POST['cep']);
        $this->cadastroUsu->setLogin       ($_POST['login']);
        $this->cadastroUsu->setSenha       ($_POST['senha']);
        $result = $this->cadastroUsu->incluirUsuarios();
        if ($result >= 1) {
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/tela-principal.php?pg=index-usuarios.php'</script>";
        } else {
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
}
new cadUsuariosController();
?>