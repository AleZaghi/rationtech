<?php
require_once("operacoesBancoRacoes.php");

class cadRacoes extends OperacoesBancoRacoes {
    private $id_racao;
    private $fase;
    private $categoria;
    private $especie;
    private $datafab;
    private $dataval;

    //Metodos Set
    public function setIdRacao($string){
        $this->id_racao = $string;
    }
    public function setFase($string){
        $this->fase = $string;
    }
    public function setCategoria($string){
        $this->categoria = $string;
    }
    public function setEspecie($string){
        $this->especie = $string;
    }
    public function setDataFab($string){
        $this->datafab = $string;
    }
    public function setDataVal($string){
        $this->dataval = $string;
    }

    //Metodos Get
    public function getIdRacao(){
        return $this->id_racao;
    }
    public function getFase(){
        return $this->fase;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function getEspecie(){
        return $this->especie;
    }
    public function getDataFab(){
        return $this->datafab;
    }

    public function getDataVal(){
        return $this->dataval;
    }

    public function incluirRacao(){
        //Médoto setDados é da classe Banco
        return $this->setDadosRacoes($this->getFase(),$this->getCategoria(),$this->getEspecie(),$this->getDataFab(),$this->getDataVal());
    }
}
?>
