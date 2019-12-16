<?php
require_once("../model/modelCadastroRacoes.php");

class cadRacoesController{

    private $cadastroRac;

    public function __construct(){
        $this->cadastroRac = new cadRacoes();
        $this->incluirRacao();
    }

    private function incluirRacao(){
        $this->cadastroRac->setFase       ($_POST['fase']);
        $this->cadastroRac->setCategoria  ($_POST['categoria']);
        $this->cadastroRac->setEspecie    ($_POST['especie']);
        $this->cadastroRac->setDataFab    ($_POST['datafab']);
        $this->cadastroRac->setDataVal    ($_POST['dataval']);
        $result = $this->cadastroRac->incluirRacao();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/tela-principal.php?pg=index-racoes.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
}

new cadRacoesController();

?>
</html>
