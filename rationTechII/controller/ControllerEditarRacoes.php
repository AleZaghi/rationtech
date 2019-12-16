<?php
require_once("../model/operacoesBancoRacoes.php");

class editarControllerRacoes {
    private $id_racao;
    private $fase;
    private $categoria;
    private $especie;
    private $datafab;
    private $dataval;


    public function __construct($id_racao){
        $this->editar = new OperacoesBancoRacoes();
        $this->criarFormularioRacoes($id_racao);
    }

    private function criarFormularioRacoes($id_racao){
        //O método pesquisaPorIdRacao() é da classe Banco -> ../model/operacoesBancoRacoes.php
        $row = $this->editar->pesquisaPorIdRacao($id_racao);
        $this->id_racao  =$row['id_racao'];
        $this->fase      =$row['fase'];
        $this->categoria =$row['categoria'];
        $this->especie    =$row['animal'];
        $this->datafab   =$row['datafab'];
        $this->dataval   =$row['dataval'];
    }
    public function editarFormularioRacoes($fase,$categoria,$especie,$datafab,$dataval,$id_racao){
        //O método updateDados() é da classe Banco -> ../model/operacoesBancoRacoes.php
        if($this->editar->updateDadosRacoes($fase,$categoria,$especie,$datafab,$dataval,$id_racao) == TRUE){
            echo "<script>alert('Registro atualizado com sucesso!');document.location='../view/tela-principal.php?pg=index-racoes.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }

    public function getIdRacao(){
        return $this->id_racao;
    }
    public function getFase(){
        return $this->fase;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function getEspecie(){
        return $this->especie;
    }
    public function getDataFab(){
        return $this->datafab;
    }
    public function getDataVal(){
        return $this->dataval;
    }
}

$id_racao = filter_input(INPUT_GET, 'id_racao');
$editar = new editarControllerRacoes($id_racao);

if(isset($_POST['submit'])){
    $editar->editarFormularioRacoes($_POST['fase'], $_POST['categoria'],$_POST['especie'],$_POST['datafab'],$_POST['dataval'],$_POST['id_racao']);
}
?>