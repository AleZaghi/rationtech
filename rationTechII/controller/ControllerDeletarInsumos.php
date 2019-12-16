<?php
require_once("../model/operacoesBancoInsumos.php");

class ControllerDeletarInsumos {
    private $deletarInsumos;

    public function __construct($idInsumo){
        $this->deletarInsumos = new OperacoesBancoInsumos();

        if($this->deletarInsumos->deleteDadosInsumos($idInsumo)== TRUE){
            echo "<script>alert('Registro deletado com sucesso!');document.location='../view/tela-principal.php?pg=index-insumos.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}

new ControllerDeletarInsumos( $_GET['id_insumo'] );

?>