<?php
require_once("../model/operacoesBancoAnimais.php");

class editarController {
    private $id;
    private $animal;
    private $categoria;
    private $especie;
    private $fase;
    private $obs;
    

    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }

    private function criarFormulario($id){
        //O método pesquisaPorId() é da classe Banco -> ../model/operacoesBancoAnimais.php
        $row = $this->editar->pesquisaPorId($id);
        $this->id        =$row['id_animal'];
        $this->animal    =$row['animal'];
        $this->categoria =$row['categoria_id'];
        $this->especie   =$row['especie_id'];
        $this->fase      =$row['fase_id'];
        $this->obs       =$row['obs'];
    }
    public function editarFormulario($animal,$categoria,$especie,$fase,$obs,$id){
        //O método updateDados() é da classe Banco -> ../model/operacoesBancoAnimais.php
        if($this->editar->updateDados($animal,$categoria,$especie,$fase,$obs,$id) == TRUE){
            echo "<script>alert('Registro atualizado com sucesso!');document.location='../view/tela-principal.php?pg=index-animais.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
    
    public function getId(){
        return $this->id;
    }
    public function getAnimal(){
        return $this->animal;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function getEspecie(){
        return $this->especie;
    }
    public function getFase(){
        return $this->fase;
    }
    public function getObs(){
        return $this->obs;
    }
}

$id = filter_input(INPUT_GET, 'id_animal');
$editar = new editarController($id);

if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['categoria'],$_POST['especie'],$_POST['fase'],$_POST['animal'],$_POST['obs'],$_POST['id']);
}
?>