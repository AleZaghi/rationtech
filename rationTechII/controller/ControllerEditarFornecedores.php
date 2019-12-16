<?php
require_once("../model/operacoesBancoFornecedores.php");

class editarControllerFornecedores {
    private $id_fornecedor;
    private $cnpj;
    private $razaosocial;
    private $telefone;
    private $email;
    private $nomefantasia;
    private $rua;
    private $logradourof;
    private $numero;
    private $complemento;
    private $bairro;
    private $cidadef;
    private $uff;
    private $cep;


    public function __construct($id_fornecedor){
        $this->editar = new OperacoesBancoFornecedores();
        $this->criarFormularioFornecedores($id_fornecedor);
    }

    private function criarFormularioFornecedores($id_fornecedor){
        //O método pesquisaPorId() é da classe Banco -> ../model/operacoesBancoFornecedores.php
        $row = $this->editar->pesquisaPorIdFornecedores($id_fornecedor);
        $this->id_fornecedor  =$row['id_fornecedor'];
        $this->cnpj          =$row['cnpj'];
        $this->razaosocial   =$row['razaosocial'];
        $this->telefone     =$row['telefone'];
        $this->email        =$row['email'];
        $this->nomefantasia  =$row['nomefantasia'];
        $this->rua           =$row['rua'];
        $this->logradouro    =$row['logradouro'];
        $this->numero        =$row['numero'];
        $this->complemento   =$row['complemento'];
        $this->bairro        =$row['bairro'];
        $this->uf            =$row['uf'];
        $this->cidade        =$row['cidade'];
        $this->cep           =$row['cep'];
    }

    public function editarFormularioFornecedores($cnpj,$razaoSocial,$telefone,$email,$nomefantasia,$id_fornecedor, $rua,$logradouro,$numero,$complemento,$bairro,$uf,$cidade){
        //O método updateDados() é da classe Banco -> ../model/operacoesBancoFornecedores.php
        if($this->editar->updateDadosFornecedores($cnpj,$razaoSocial,$telefone,$email,$nomefantasia,$id_fornecedor)+$this->editar->updateDadosEndereco($rua,$logradouro,$numero,$complemento,$bairro,$uf,$cidade) == TRUE){
            echo "<script>alert('Registro atualizado com sucesso!');document.location='../view/tela-principal.php?pg=index-fornecedores.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }

    public function getIdFornecedor(){
        return $this->id_fornecedor;
    }
    public function getCnpj(){
        return $this->cnpj;
    }
    public function getRazaoSocial(){
        return $this->razaosocial;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getNomeFantasia(){
        return $this->nomefantasia;
    }
    public function getRua(){
        return $this->rua;
    }
    public function getLogradouro(){
        return $this->logradouro;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function getComplemento(){
        return $this->complemento;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function getUf(){
        return $this->uf;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function getCep(){
        return $this->cep;
    }
}

$id_fornecedor = filter_input(INPUT_GET, 'id_fornecedor');
$editar = new editarControllerFornecedores($id_fornecedor);

if(isset($_POST['submit'])){
    $editar->editarFormularioFornecedores($_POST['cnpj'],$_POST['razaoSocial'],$_POST['telefone'],$_POST['email'],$_POST['nomefantasia'],
        $_POST['rua'],$_POST['logradouro'],$_POST['numero'],$_POST['complemento'],$_POST['bairro'],$_POST['estado'],$_POST['cidade'],$_POST['id_fornecedor']);
}
?>