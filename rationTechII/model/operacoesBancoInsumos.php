<?php
require_once("conf.php");

class OperacoesBancoInsumos{
    protected $mysqli;
    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setDadosInsumos($nome,$tipo,$categoria,$custo,$medida,$fornecedor_id){
        $data = date("Y-m-d H:i:s");
        $stmtI = $this->mysqli->prepare("INSERT INTO insumos (`nome`,`tipo`,`categoria`,`custo`,`medida`,`id_fornecedor`,`data`) VALUES (?,?,?,?,?,?,?)");
        $stmtI->bind_param("sssssis",$nome,$tipo,$categoria,$custo,$medida,$fornecedor_id,$data);
        if( $stmtI->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
    }

    public function getDadosInsumos(){
        $result = $this->mysqli->query("SELECT * FROM insumos");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }

    public function deleteDadosInsumos($id_insumo){
        if($this->mysqli->query("DELETE FROM `insumos` WHERE `id_insumo` = '".$id_insumo."';")== TRUE){
            return true;
        }else{
            return false;
        }
    }

    public function pesquisaPorIdInsumos($id_insumo){
        $result = $this->mysqli->query("SELECT * FROM insumos WHERE id_insumo='$id_insumo'");
        return $result->fetch_array(MYSQLI_ASSOC);
    }

    public function updateDados($nome,$tipo,$categoria,$custo,$medida,$fornecedor_id,$id_insumo)
    {
        $stmti = $this->mysqli->prepare("UPDATE `insumos` SET `nome`=?,`tipo`=?,`categoria`=?,`custo`=?,`medida`=?, `id_fornecedor`=?, WHERE `id_insumo`= ?");
        $stmti->bind_param("sssssii", $nome, $tipo, $categoria, $custo, $medida, $fornecedor_id,$id_insumo);
        if ($stmti->execute() == TRUE) {
            return true;
        } else {
            return false;
        }
    }
    public function getFornecedorId(){
        $result = $this->mysqli->query("SELECT * FROM fornecedores");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }
    public function getDescricaoInsumos(){
        $result = $this->mysqli->query("SELECT i.id_insumo, i.nome, i.tipo, i.categoria, i.custo, i.medida, i.data, f.razaosocial FROM insumos AS i 
LEFT JOIN fornecedores AS f ON i.id_fornecedor = f.id_fornecedor");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }

}
?>