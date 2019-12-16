<?php
require_once("../model/operacoesBancoAnimais.php");
class deleta {
    private $deleta;
    
    public function __construct($id){
        $this->deleta = new Banco();

        if($this->deleta->deleteDados($id)== TRUE){
            echo "<script>alert('Registro deletado com sucesso!');document.location='../view/tela-principal.php?pg=index-animais.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}

new deleta( $_GET['id_animal'] );

?>