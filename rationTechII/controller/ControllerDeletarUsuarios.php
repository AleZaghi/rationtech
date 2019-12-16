<?php
require_once ("../model/operacoesBancoUsuarios.php");

class ControllerDeletarUsuarios {
    private $deletarUsuario;

    public function __construct($idUsuario){
        $this->deletarUsuario = new OperacoesBancoUsuarios();

        if($this->deletarUsuario->deleteDadosUsuarios($idUsuario)== TRUE){
            echo "<script>alert('Registro deletado com sucesso!');document.location='../view/tela-principal.php?pg=index-usuarios.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}

new ControllerDeletarUsuarios( $_GET['id_usuario'] );
?>