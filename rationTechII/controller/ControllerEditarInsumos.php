<?php
require_once("../model/operacoesBancoInsumos.php");

class ControllerEditarInsumos {
    private $id_insumo;
    private $nome;
    private $tipo;
    private $categoria;
    private $custo;
    private $medida;
    private $fornecedor_id;


    public function __construct($id_insumo){
        $this->editar = new OperacoesBancoInsumos();
        $this->criarFormularioInsumos($id_insumo);
    }

    private function criarFormularioInsumos($id_insumo){
        //O método pesquisaPorId() é da classe Banco -> ../model/operacoesBancoInsumos.php
        $row = $this->editar->pesquisaPorIdInsumos($id_insumo);
        $this->id_insumo   =$row['id_insumo'];
        $this->nome      =$row['nome'];
        $this->tipo       =$row['tipo'];
        $this->categoria =$row['categoria'];
        $this->custo      =$row['custo'];
        $this->medida     =$row['medida'];
        $this->fornecedor_id =$row['id_fornecedor'];

    }
    public function editarFormularioInsumos($nome,$tipo,$categoria,$custo,$medida,$fornecedor_id,$id_insumo){
        //O método updateDados() é da classe Banco -> ../model/operacoesBancoInsumos.php
        if($this->editar->updateDados($nome,$tipo,$categoria,$custo,$medida,$fornecedor_id,$id_insumo) == TRUE){
            echo "<script>alert('Registro atualizado com sucesso!');document.location='../view/tela-principal.php?pg=index-insumos.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }

    public function getIdInsumo(){
        return $this->id_insumo;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function getCusto(){
        return $this->custo;
    }
    public function getMedida(){
        return $this->medida;
    }
    public function getFornecedorId(){
        return $this->fornecedor_id;
    }
}

$id_insumo = filter_input(INPUT_GET, 'id_insumo');
$editar = new ControllerEditarInsumos($id_insumo);

if(isset($_POST['submit'])){
    $editar->editarFormularioInsumos($_POST['nome'],$_POST['tipo'],$_POST['categoria'],$_POST['custo'],$_POST['medida'],$_POST['fornecedor_id'],$_POST['id_insumo']);
}
?>