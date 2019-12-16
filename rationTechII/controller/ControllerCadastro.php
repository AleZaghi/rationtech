<?php
require_once("../model/modelCadastro.php");

class cadAnimaisController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new cadAnimais();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setCategoria($_POST['categoria']);
        $this->cadastro->setEspecie  ($_POST['especie']);
        $this->cadastro->setFase     ($_POST['fase']);
        $this->cadastro->setAnimal   ($_POST['animal']);
        $this->cadastro->setObs      ($_POST['obs']);
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/tela-principal.php?pg=index-animais.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
}

new cadAnimaisController();

?>
</html>
