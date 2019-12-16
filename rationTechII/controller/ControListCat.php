<?php
require_once("../model/operacoesBancoAnimais.php");

class listarCategoria{
    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->renderListaCat();
    }

    private function renderListaCat(){
        $row = $this->lista->getCategoria();
        echo "<select name='categoria' class='form-control mt-2'><option value='0' selected disabled>Selecione</option>";
        foreach ($row as $value){
            echo "<option value='". $value['id_categoria'] ."'>" .$value['nome_categoria'] ."</option>";
        }
        echo "</select>";
    }
}

?>
