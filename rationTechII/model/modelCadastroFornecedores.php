<?php
require_once("operacoesBancoFornecedores.php");

class cadFornecedores extends OperacoesBancoFornecedores {
    private $id_fornecedor;
    private $cnpj;
    private $razaosocial;
    private $telefone;
    private $email;
    private $nomefantasia;
    private $rua;
    private $logradourof;
    private $complemento;
    private $numero;
    private $bairro;
    private $uff;
    private $cidadef;
    private $cep;

    //Metodos Set
    public function setIdFornecedor($string){
        $this->id_fornecedor = $string;
    }
    public function setCnpj($string){
        $this->cnpj = $string;
    }
    public function setRazaoSocial($string){
        $this->razaosocial = $string;
    }
    public function setTelefone($string){
        $this->telefone = $string;
    }
    public function setEmail($string){
        $this->email = $string;
    }
    public function setNomeFantasia($string){
        $this->nomefantasia = $string;
    }
    public function setLogradouro($string){
        $this->logradourof = $string;
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
    public function setRua($string){
        $this->rua = $string;
    }
    public function setUf($string){
        $this->uff = $string;
    }
    public function setCidade($string){
        $this->cidadef = $string;
    }
    public function setCep($string){
        $this->cep = $string;
    }

    //Metodos Get
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
        return $this->logradourof;
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
        return $this->uff;
    }
    public function getCidade(){
        return $this->cidadef;
    }
    public function getCep(){
        return $this->cep;
    }
        //Médodo Incluir Fornecedor
    public function incluirFornecedor(){
        //Médoto setDados é da classe Banco

        $this->setDadosEndereco($this->getRua(),$this->getLogradouro(),$this->getNumero(),$this->getComplemento(),$this->getBairro(),$this->getCidade(),$this->getUf(),$this->getCep());

        $idEnd = $this->getIdEndereco();

        return $this->setDadosFornecedores($this->getCnpj(),$this->getRazaoSocial(),$this->getTelefone(),$this->getEmail(),$this->getNomeFantasia(),$idEnd);
    }
}
?>
