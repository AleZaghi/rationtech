<?php
require_once("../model/operacoesBancoAnimais.php");

class listarEspecie{
    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->renderListaEsp();
    }

    private function renderListaEsp(){
        $row = $this->lista->getEspecie();
        echo "<select name='especie' class='form-control mt-2'><option value='0' selected disabled>Selecione</option>";
        foreach ($row as $value){
            echo "<option value='". $value['id_especie'] ."'>" .$value['nome_especie'] ."</option>";
        }
        echo "</select>";
    }
}

?>