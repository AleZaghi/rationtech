<?php
require_once("../model/operacoesBancoAnimais.php");

class listarController{
    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->renderListagem();
    }

    private function renderListagem(){
        $row = $this->lista->getDescricaoAnimal();
        foreach ($row as $value){
            echo "<tr>";
            echo "<td>".$value['animal'] ."</td>";
            echo "<td>".$value['categoria'] ."</td>";
            echo "<td>".$value['especie'] ."</td>";
            echo "<td>".$value['fase'] ."</td>";
            echo "<td>".$value['obs'] ."</td>";
            echo "<td><a href='../view/tela-principal.php?pg=edit-animais.php&id_animal=".$value['id_animal']."'> | Editar |  </a>";
            echo "<a href='../controller/ControllerDeletar.php?id_animal=".$value['id_animal']."'> | Excluir |</a>";
            echo "</td>";
            echo "</tr>";
        }
    }
}

?>