<?php
require_once("../model/operacoesBancoUsuarios.php");

class listarEstado{
    private $lista;
    public function __construct(){
        $this->lista = new OperacoesBancoUsuarios();
        $this->renderListaEstado();
    }

    private function renderListaEstado(){
        $row = $this->lista->getUf();
        echo "<select name='uf' class='form-control mt-2'><option value='0' selected disabled>Selecione</option>";
        foreach ($row as $value){
            echo "<option value='". $value['id_uf'] ."'>" .$value['uf'] ."</option>";
        }
        echo "</select>";
    }
}
?>