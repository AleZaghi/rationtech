<?php
require_once("../model/operacoesBancoInsumos.php");

class listarControllerInsumos{
    private $listaInsumos;

    public function __construct(){
        $this->listaInsumos = new OperacoesBancoInsumos();
        $this->renderListagemInsumos();
    }

    private function renderListagemInsumos(){
        $row = $this->listaInsumos->getDescricaoInsumos();
        foreach ($row as $value){
            echo "<tr>";
            echo "<td>".$value['nome'] ."</td>";
            echo "<td>".$value['tipo'] ."</td>";
            echo "<td>".$value['categoria'] ."</td>";
            echo "<td>".$value['custo'] ."</td>";
            echo "<td>".$value['medida'] ."</td>";
            echo "<td>".$value['data'] ."</td>";
            echo "<td>".$value['razaosocial'] ."</td>";
            //echo "<td><a href='../view/tela-principal.php?pg=edit-insumos.php&id_insumo=".$value['id_insumo']."'> | Editar |  </a>";
            //echo "<a href='../controller/ControllerDeletarInsumos.php?id_insumo=".$value['id_insumo']."'> | Excluir |</a>";
            echo "</td>";
            echo "</tr>";
        }
    }
}

?>