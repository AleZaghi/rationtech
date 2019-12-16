<?php
require_once("conf.php");

class OperacoesBancoRacoes{
    protected $mysqli;
    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setDadosRacoes($fase,$categoria,$especie,$datafab,$dataval){
        $stmt = $this->mysqli->prepare("INSERT INTO racoes (`fase`, `categoria`, `animal`,`datafab`, `dataval`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("iiiss",$fase,$categoria,$especie,$datafab,$dataval);
        if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
    }

    public function getDadosRacoes(){
        $result = $this->mysqli->query("SELECT * FROM racoes");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }

    public function deleteDadosRacoes($id_racao){
        if($this->mysqli->query("DELETE FROM `racoes` WHERE `id_racao` = '".$id_racao."';")== TRUE){
            return true;
        }else{
            return false;
        }
    }

    public function pesquisaPorIdRacao($id_racao){
        $result = $this->mysqli->query("SELECT * FROM racoes WHERE id_racao='$id_racao'");
        return $result->fetch_array(MYSQLI_ASSOC);
    }

    public function updateDadosRacoes($fase,$categoria,$especie,$datafab,$dataval,$id_racao){
        $stmt = $this->mysqli->prepare("UPDATE `racoes` SET `fase`=?,`categoria`=?,`animal`=?,`datafab`=?,`dataval`=? WHERE `id_racao`=?");
        $stmt->bind_param("iiissi",$fase,$categoria,$especie,$datafab,$dataval,$id_racao);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }

    public function getCategoria(){
        $result = $this->mysqli->query("SELECT * FROM categoria");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }

    public function getEspecie(){
        $result = $this->mysqli->query("SELECT * FROM especie");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }

    public function getFase(){
        $result = $this->mysqli->query("SELECT * FROM fase");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }

    public function getDescricaoRacao(){
        $result = $this->mysqli->query("SELECT r.id_racao, r.datafab, r.dataval, cat.nome_categoria AS categoria, esp.nome_especie AS especie, f.nome_fase AS fase FROM racoes AS r 
LEFT JOIN categoria AS cat ON r.categoria = cat.id_categoria
LEFT JOIN especie AS esp ON r.animal = esp.id_especie
LEFT JOIN fase AS f ON r.fase = f.id_fase");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }
}
?>