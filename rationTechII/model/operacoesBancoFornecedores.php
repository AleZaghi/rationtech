<?php
require_once("conf.php");

class OperacoesBancoFornecedores
{
    protected $mysqli;

    public function __construct()
    {
        $this->conexao();
    }

    private function conexao()
    {
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
    }

    public function setDadosFornecedores($cnpj, $razaosocial, $telefone, $email, $nomefantasia, $endereco_id)
    {
        $stmt = $this->mysqli->prepare("INSERT INTO fornecedores (`cnpj`,`razaosocial`,`telefone`,`email`,`nomefantasia`, `endereco`) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("sssssi", $cnpj, $razaosocial, $telefone, $email, $nomefantasia, $endereco_id);
        if ($stmt->execute() == TRUE) {
            return true;
        } else {
            return false;
        }
    }
    public function setDadosEndereco($rua,$logradourof,$numero,$complemento,$bairro,$uff,$cidadef,$cep){
        $stmt = $this->mysqli->prepare("INSERT INTO endereco (`rua`,`logradouro`,`numero`,`complemento`,`bairro`,`uf`,`cidade`,`cep`) VALUES(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sisssiis",$rua,$logradourof,$numero,$complemento,$bairro,$uff,$cidadef,$cep);
        if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
    }
    public function getIdEndereco(){
        $result = $this->mysqli->query("SELECT id_endereco FROM `endereco` ORDER BY id_endereco DESC LIMIT 1");
        $row = $result->fetch_array(MYSQLI_ASSOC);
        return $row['id_endereco'];
    }

    public function getDadosFornecedores()
    {
        $result = $this->mysqli->query("SELECT * FROM fornecedores");
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $array[] = $row;
        }
        return $array;
    }


    public function deleteDadosFornecedores($id_fornecedor)
    {
        if ($this->mysqli->query("DELETE FROM `fornecedores` WHERE `id_fornecedor` = '" . $id_fornecedor . "';") == TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function pesquisaPorIdFornecedores($id_fornecedor)
    {
        $result = $this->mysqli->query("SELECT * FROM fornecedores WHERE id_fornecedor='$id_fornecedor'");
        return $result->fetch_array(MYSQLI_ASSOC);
    }

    public function updateDadosFornecedores($cnpj,$razaosocial,$telefone,$email,$nomefantasia,$id_fornecedor)
    {
        $stmt = $this->mysqli->prepare("UPDATE `fornecedores` SET `cnpj`=?,`razaosocial`=?,`telefone`=?,`email`=?,`nomefantasia`=? WHERE `id_fornecedor`= ?");
        $stmt->bind_param("sssssi",$cnpj,$razaosocial,$telefone,$email,$nomefantasia,$id_fornecedor);
        if ($stmt->execute() == TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function updateDadosEndereco($rua,$logradourof,$numero,$complemento,$bairro,$cidadef,$uff,$cep){
        $stmt = $this->mysqli->prepare("UPDATE `endereco` SET (`rua`=?,`logradouro`=?,`numero`=?,`complemento`=?,`bairro`=?,`cidade`=?,`uf`=?,`cel`=?) WHERE `id_endereco`= ?");
        $stmt->bind_param("ssssssss",$rua,$logradourof,$numero,$complemento,$bairro,$cidadef,$uff,$cep);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
    public function getUf()
    {
        $result = $this->mysqli->query("SELECT * FROM uf");
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $array[] = $row;
        }
        return $array;
    }

    public function getCidade()
    {
        $result = $this->mysqli->query("SELECT * FROM cidade");
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $array[] = $row;
        }
        return $array;
    }
    public function getCidadePorUF($idUf){
        $result = $this->mysqli->query("SELECT * FROM cidade WHERE uf_id=$idUf");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }

    public function getLogradouro()
    {
        $result = $this->mysqli->query("SELECT * FROM logradouro");
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $array[] = $row;
        }
        return $array;
    }

    public function getDescricaoFornecedores(){
        $result = $this->mysqli->query("SELECT f.id_fornecedor, f.cnpj, f.razaosocial, f.nomefantasia,f.telefone, f.email, e.rua, e.numero, e.complemento,e.bairro, e.cep, log.logradouro, c.cidade, uf.uf
FROM fornecedores AS f
inner join endereco AS e on e.id_endereco = f.endereco 
left JOIN logradouro AS log ON log.id_logradouro = e.logradouro 
left join uf as uf on uf.id_uf = e.uf 
left join cidade c on c.id_cidade = e.cidade");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }
}
?>