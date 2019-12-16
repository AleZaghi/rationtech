<?php
require_once("operacoesBancoAnimais.php");

class cadAnimais extends Banco {
    private $id;
    private $animal;
    private $categoria;
    private $especie;
    private $fase;
    private $obs;
    
    //Metodos Set
    public function setId($string){
        $this->id = $string;
    }
    public function setAnimal($string){
        $this->animal = $string;
    }
    public function setCategoria($string){
        $this->categoria = $string;
    }

    public function setEspecie($string){
        $this->especie = $string;
    }
    public function setFase($string){
        $this->fase = $string;
    }
    public function setObs($string){
        $this->obs = $string;
    }

    //Metodos Get
    public function getId(){
        return $this->id;
    }
    public function getAnimal(){
        return $this->animal;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function getEspecie(){
        return $this->especie;
    }
    public function getFase(){
        return $this->fase;
    }
    public function getObs(){
        return $this->obs;
    }

    public function incluir(){
        //Médoto setDados é da classe Banco
        return $this->setDados($this->getCategoria(),$this->getEspecie(),$this->getFase(),$this->getAnimal(),$this->getObs());
    }
}
?>
