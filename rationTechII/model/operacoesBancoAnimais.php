<?php
require_once("conf.php");

class Banco{
    protected $mysqli;
    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setDados($categoria,$especie,$fase,$animal,$obs){
        $stmt = $this->mysqli->prepare("INSERT INTO animais (`categoria_id`, `especie_id`, `fase_id`,`animal`, `obs`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss",$categoria,$especie,$fase,$animal, $obs);
        if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
    }

    public function getDados(){
        $result = $this->mysqli->query("SELECT * FROM animais");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }

    public function deleteDados($id){
        if($this->mysqli->query("DELETE FROM `animais` WHERE `id_animal` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }
    }

    public function pesquisaPorId($id){
        $result = $this->mysqli->query("SELECT * FROM animais WHERE id_animal='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);
    }

    public function updateDados($animal,$categoria,$especie,$fase,$obs,$id){
        $stmt = $this->mysqli->prepare("UPDATE `animais` SET `categoria_id`=?, `especie_id`=?, `fase_id`=?,`animal`=?, `obs`=? WHERE `id_animal`= ?");
        $stmt->bind_param("ssssss",$animal,$categoria,$especie,$fase,$obs,$id);
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

    public function getDescricaoAnimal(){
        $result = $this->mysqli->query("SELECT a.id_animal, a.animal, a.obs, cat.nome_categoria AS categoria, esp.nome_especie AS especie, f.nome_fase AS fase FROM animais AS a 
LEFT JOIN categoria AS cat ON a.categoria_id = cat.id_categoria
LEFT JOIN especie AS esp ON a.especie_id = esp.id_especie
LEFT JOIN fase AS f ON a.fase_id = f.id_fase");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }
}
?>