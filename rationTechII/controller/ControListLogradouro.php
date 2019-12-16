<?php
require_once("../model/operacoesBancoUsuarios.php");

class listarLogradouro{
    private $lista;

    public function __construct(){
        $this->lista = new OperacoesBancoUsuarios();
        $this->renderListaLog();
    }

    private function renderListaLog(){
        $row = $this->lista->getLogradouro();
        echo "<select name='logradouro' class='form-control mt-2'><option value='0' selected disabled>Selecione</option>";
        foreach ($row as $value){
            echo "<option value='". $value['id_logradouro'] ."'>" .$value['logradouro'] ."</option>";
        }
        echo "</select>";
    }
}

?>
