<?php
require_once("../model/operacoesBancoFornecedores.php");

class ControllerDeletarFornecedor {
    private $deletarFornecedor;

    public function __construct($idFornecedor){
        $this->deletarFornecedor = new OperacoesBancoFornecedores();

        if($this->deletarFornecedor->deleteDadosFornecedores($idFornecedor)== TRUE){
            echo "<script>alert('Registro deletado com sucesso!');document.location='../view/tela-principal.php?pg=index-fornecedores.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}

new ControllerDeletarFornecedor( $_GET['id_fornecedor'] );

?>