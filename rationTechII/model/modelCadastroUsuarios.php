<?php
require_once("operacoesBancoUsuarios.php");

class cadUsuarios extends OperacoesBancoUsuarios {
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
    private $uf;
    private $cidade;
    private $cep;
    private $login;
    private $senha;

    //Metodos Set
    public function setIdUsuario($string){
        $this->idUsuario = $string;
    }
    public function setCpf($string){
        $this->cpf = $string;
    }
    public function setNome($string){
        $this->nome = $string;
    }
    public function setTelefone($string){
        $this->telefone = $string;
    }
    public function setEmail($string){
        $this->email = $string;
    }
    public function setCargo($string){
        $this->cargo = $string;
    }
    public function setConfSenha($string){
        $this->confsenha = $string;
    }
    public function setRua($string){
        $this->rua = $string;
    }
    public function setLogradouro($string){
        $this->logradouro = $string;
    }

    public function setNumero($string){
        $this->numero = $string;
    }
    public function setComplemento($string){
        $this->complemento = $string;
    }
    public function setBairro($string){
        $this->bairro = $string;
    }
    public function setUf($string){
        $this->uf = $string;
    }
    public function setCidade($string){
        $this->cidade = $string;
    }
    public function setCep($string){
        $this->cep = $string;
    }
    public function setLogin($string){
        $this->login = $string;
    }
    public function setSenha($string){
        $this->senha = $string;
    }

    //Metodos Get
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
    public function getNumero(){
        return $this->numero;
    }
    public function getLogradouro(){
        return $this->logradouro;
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

    //Método para incluir Usuario.
    public function incluirUsuarios(){
        //Médoto setDados é da classe Banco

        $this->setDadosEndereco($this->getRua(),$this->getLogradouro(),$this->getNumero(),$this->getComplemento(),$this->getBairro(),$this->getCidade(),$this->getUf(),$this->getCep());

        $idEnd = $this->getIdEndereco();

        $this->setDadosLogin($this->getLogin(),$this->getSenha());
        $idAutentic = $this->getIdAutenticacao();

        return $this->setDadosUsuarios($this->getCpf(),$this->getNome(),$this->getTelefone(),$this->getEmail(),$this->getCargo(),$this->getConfSenha(), $idEnd, $idAutentic);
    }
}
?>