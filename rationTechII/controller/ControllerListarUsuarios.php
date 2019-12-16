<?php
require_once("../model/operacoesBancoUsuarios.php");

class listarControllerUsuarios{
    private $listaUsu;

    public function __construct(){
        $this->listaUsu = new OperacoesBancoUsuarios();
        $this->renderListagemUsuarios();
    }

    private function renderListagemUsuarios(){
        $row = $this->listaUsu->getDescricaoUsuarios();
        foreach ($row as $value){
            echo "<tr>";
            echo "<td>".$value['nome'] ."</td>";
            echo "<td>".$value['cpf'] ."</td>";
            echo "<td>".$value['telefone'] ."</td>";
            echo "<td>".$value['email'] ."</td>";
            echo "<td>".$value['cargo'] ."</td>";
            echo "<th>".$value['logradouro'] ."</th>";
            echo "<td>".$value['rua'] ."</td>";
            echo "<td>".$value['numero'] ."</td>";
            echo "<td>".$value['complemento'] ."</td>";
            echo "<td>".$value['bairro'] ."</td>";
            echo "<td>".$value['cidade'] ."</td>";
            echo "<td>".$value['uf'] ."</td>";
            echo "<td>".$value['cep'] ."</td>";
            echo "<td>".$value['login'] ."</td>";

            //echo "<td><a href='../view/tela-principal.php?pg=edit-usuarios.php&id_usuario=".$value['id_usuario']."'> | Editar |  </a>";
            //echo "<a href='../controller/ControllerDeletarUsuario.php?id_usuario=".$value['id_usuario']."'> | Excluir |</a>";
            echo "</td>";
            echo "</tr>";
        }
    }
}

?>