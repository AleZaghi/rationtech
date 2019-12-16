<?php
require_once("../model/modelCadastroFornecedores.php");

class cadFornecedoresController{
    private $cadastroFor;

    public function __construct(){
        $this->cadastroFor = new cadFornecedores();
        $this->incluirFornecedor();
    }

    private function incluirFornecedor(){
        $this->cadastroFor->setCnpj         ($_POST['cnpj']);
        $this->cadastroFor->setRazaosocial  ($_POST['razaosocial']);
        $this->cadastroFor->setTelefone     ($_POST['telefone']);
        $this->cadastroFor->setEmail        ($_POST['email']);
        $this->cadastroFor->setNomeFantasia ($_POST['nomefantasia']);
        $this->cadastroFor->setRua          ($_POST['rua']);
        $this->cadastroFor->setLogradouro   ($_POST['logradouro']);
        $this->cadastroFor->setNumero       ($_POST['numero']);
        $this->cadastroFor->setComplemento  ($_POST['complemento']);
        $this->cadastroFor->setBairro       ($_POST['bairro']);
        $this->cadastroFor->setUf           ($_POST['uf']);
        $this->cadastroFor->setCidade       ($_POST['cidade']);
        $this->cadastroFor->setCep          ($_POST['cep']);
        $result = $this->cadastroFor->incluirFornecedor();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/tela-principal.php?pg=index-fornecedores.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
}

new cadFornecedoresController();

?>