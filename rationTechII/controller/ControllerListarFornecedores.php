<?php
require_once("../model/operacoesBancoFornecedores.php");

class listarControllerFornecedores{
    private $listaFor;

    public function __construct(){
        $this->listaFor = new OperacoesBancoFornecedores();
        $this->renderListagemFornecedores();
    }

    private function renderListagemFornecedores (){
        $row = $this->listaFor->getDescricaoFornecedores();
        foreach ($row as $value){
            echo "<tr>";

            echo "<td>".$value['razaosocial'] ."</td>";
            echo "<td>".$value['nomefantasia'] ."</td>";
            echo "<td>".$value['cnpj'] ."</td>";
            echo "<td>".$value['telefone'] ."</td>";
            echo "<td>".$value['email'] ."</td>";
            echo "<td>".$value['logradouro'] ."</td>";
            echo "<td>".$value['rua'] ."</td>";
            echo "<td>".$value['numero'] ."</td>";
            echo "<td>".$value['complemento'] ."</td>";
            echo "<td>".$value['bairro'] ."</td>";
            echo "<td>".$value['cidade'] ."</td>";
            echo "<td>".$value['uf'] ."</td>";
            echo "<td>".$value['cep'] ."</td>";

           // echo "<td><a href='../view/tela-principal.php?pg=edit-fornecedores.php&id_fornecedor=".$value['id_fornecedor']."'> | Editar |  </a>";
            //echo "<a href='../controller/ControllerDeletarFornecedor.php?id_fornecedor=".$value['id_fornecedor']."'> | Excluir |</a>";
            echo "</td>";
            echo "</tr>";
        }
    }

}

?>