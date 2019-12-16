<?php
require_once("../model/operacoesBancoRacoes.php");
class deletarRacoes {
    private $deletaRacao;

    public function __construct($id_racao){
        $this->deletaRacao = new OperacoesBancoRacoes();

        if($this->deletaRacao->deleteDadosRacoes($id_racao)== TRUE){
            echo "<script>alert('Registro deletado com sucesso!');document.location='../view/tela-principal.php?pg=index-racoes.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}

new deletarRacoes( $_GET['id_racao'] );

?>