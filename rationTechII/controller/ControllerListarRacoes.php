<?php
require_once("../model/operacoesBancoRacoes.php");

class listarControllerRacoes{
    private $listaRac;

    public function __construct(){
        $this->listaRac = new OperacoesBancoRacoes();
        $this->renderListagemRacoes();
    }

    private function renderListagemRacoes(){
        $row = $this->listaRac->getDescricaoRacao();
        foreach ($row as $value){
            echo "<tr>";
            echo "<td>".$value['especie'] ."</td>";
            echo "<td>".$value['categoria'] ."</td>";
            echo "<td>".$value['fase'] ."</td>";
            echo "<td>".$value['datafab'] ."</td>";
            echo "<td>".$value['dataval'] ."</td>";

            //echo "<td><a href='../view/tela-principal.php?pg=edit-racoes.php&id_racao=".$value['id_racao']."'> | Editar |  </a>";
            //echo "<a href='../controller/ControllerDeletarRacoes.php?id_racao=".$value['id_racao']."'> | Excluir |</a>";
            echo "</td>";
            echo "</tr>";
        }
    }
}

?>