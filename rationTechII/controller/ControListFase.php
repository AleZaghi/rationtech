<?php
require_once("../model/operacoesBancoAnimais.php");

class listarFase{
    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->renderListaFase();
    }

    private function renderListaFase(){
        $row = $this->lista->getFase();
        echo "<select name='fase' class='form-control mt-2'><option value='0' selected disabled>Selecione</option>";
        foreach ($row as $value){
            echo "<option value='". $value['id_fase'] ."'>" .$value['nome_fase'] ."</option>";
        }
        echo "</select>";
    }
}

?>