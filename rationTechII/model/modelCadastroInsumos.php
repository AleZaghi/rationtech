<?php
require_once("operacoesBancoInsumos.php");

class cadInsumos extends OperacoesBancoInsumos {
    private $id_insumo;
    private $nome;
    private $tipo;
    private $categoria;
    private $custo;
    private $medida;
    private $fornecedor_id;
    private $data;

    //Metodos Set
    public function setIdInsumo($string){
        $this->id_insumo = $string;
    }
    public function setNome($string){
        $this->nome = $string;
    }
    public function setTipo($string){
        $this->tipo = $string;
    }

    public function setCategoria($string){
        $this->categoria = $string;
    }
    public function setCusto($string){
        $this->custo = $string;
    }
    public function setMedida($string){
        $this->medida = $string;
    }
    public function setFornecedorId($string){
        $this->fornecedor_id = $string;
    }
    public function setData($string){
        $this->data = $string;
    }

    //Metodos Get
    public function getIdInsumo(){
        return $this->id_insumo;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function getCusto(){
        return $this->custo;
    }
    public function getMedida(){
        return $this->medida;
    }
    public function getFornecedorId(){
        return $this->fornecedor_id;
    }
    public function getData(){
        return $this->data;
    }
    public function incluirInsumos(){
        //Médoto setDados é da classe Banco
        return $this->setDadosInsumos($this->getNome(),$this->getTipo(),$this->getCategoria(),$this->getCusto(),$this->getMedida(),$this->getFornecedorId());
    }
}
?>
