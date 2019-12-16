<?php
require_once("../model/modelCadastroInsumos.php");

class cadInsumosController{

    private $cadastroInsumo;

    public function __construct(){
        $this->cadastroInsumo = new cadInsumos();
        $this->incluirInsumos();
    }

    private function incluirInsumos(){
        $this->cadastroInsumo->setNome      ($_POST['nome']);
        $this->cadastroInsumo->setTipo       ($_POST['tipo']);
        $this->cadastroInsumo->setCategoria ($_POST['categoria']);
        $this->cadastroInsumo->setCusto      ($_POST['custo']);
        $this->cadastroInsumo->setMedida     ($_POST['medida']);
        $this->cadastroInsumo->setFornecedorId ($_POST['fornecedor_id']);
        $result = $this->cadastroInsumo->incluirInsumos();

        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/tela-principal.php?pg=index-insumos.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
}

new cadInsumosController();

?>