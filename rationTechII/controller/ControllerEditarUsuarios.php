<?php
require_once ("../model/operacoesBancoUsuarios.php");

class controllerEditarUsuarios {
    private $idUsuario;
    private $cpf;
    private $nome;
    private $telefone;
    private $email;
    private $cargo;
    private $confsenha;
    private $rua;
    private $logradouro;
    private $numero;
    private $complemento;
    private $bairro;
    private $cidade;
    private $uf;
    private $cep;
    private $login;
    private $senha;


    public function __construct($idUsuario){
        $this->editar = new OperacoesBancoUsuarios();
        $this->criarFormularioUsuarios($idUsuario);
    }

    private function criarFormularioUsuarios($idUsuario){
        $row = $this->editar->pesquisaPorIdUsuarios($idUsuario);
        $this->idUsuario   =$row['id_usuario'];
        $this->cpf         =$row['cpf'];
        $this->nome        =$row['nome'];
        $this->telefone    =$row['telefone'];
        $this->email       =$row['email'];
        $this->cargo       =$row['cargo'];
        $this->confsenha   =$row['confsenha'];
        $this->rua         =$row['rua'];
        $this->logradouro  =$row['logradouro'];
        $this->numero      =$row['numero'];
        $this->complemento =$row['complemento'];
        $this->bairro      =$row['bairro'];
        $this->uf          =$row['uf'];
        $this->cidade      =$row['cidade'];
        $this->cep         =$row['cep'];
        $this->login       =$row['login'];
        $this->senha       =$row['senha'];


    }
    public function editarFormularioUsuarios($cpf,$nome,$telefone,$email,$cargo,$confsenha,$rua,$logradouro,$numero,$complemento,$bairro,$uf,$cidade,$cep,$login,$senha){
        if($this->editar->updateDadosUsuarios($cpf,$nome,$telefone,$email,$cargo,$confsenha)+$this->editar->updateDadosEndereco($rua,$logradouro,$numero,$complemento,$bairro,$cidade,$uf,$cep)+$this->editar->updateDadosLogin($login,$senha) == TRUE){
            echo "<script>alert('Registro atualizado com sucesso!');document.location='../view/tela-principal.php?pg=index-usuarios.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getCargo(){
        return $this->cargo;
    }
    public function getConfSenha(){
        return $this->confsenha;
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
    public function getLogin(){
        return $this->login;
    }
    public function getSenha(){
        return $this->senha;
    }
}

$idUsuario = filter_input(INPUT_GET, 'id_usuario');
$editar = new ControllerEditarUsuarios($idUsuario);

if(isset($_POST['submit'])){
    $editar->editarFormularioUsuarios($_POST['cpf'],$_POST['nome'],$_POST['telefone'],$_POST['email'],$_POST['cargo'],$_POST['confsenha'],$_POST['rua'],$_POST['logradouro'],$_POST['numero'],$_POST['complemento'],$_POST['bairro'],$_POST['uf'],$_POST['cidade'],$_POST['cep'],$_POST['login'],$_POST['senha'],$_POST['idUsuario']);
}

?>