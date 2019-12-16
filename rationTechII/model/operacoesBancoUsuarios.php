<?php
require_once("conf.php");

class OperacoesBancoUsuarios{
    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setDadosUsuarios($cpf,$nome,$telefone,$email,$cargo,$confsenha, $endereco_id, $autenticacao_id){
        $stmt = $this->mysqli->prepare("INSERT INTO usuarios(`cpf`, `nome`, `telefone`,`email`, `cargo`, `confsenha`, `endereco`,`autenticacao_id`) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssii",$cpf,$nome,$telefone,$email,$cargo,$confsenha,$endereco_id, $autenticacao_id);
        if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
    }

    public function setDadosEndereco($rua,$logradouro,$numero,$complemento,$bairro,$uf,$cidade,$cep){
        $stmt = $this->mysqli->prepare("INSERT INTO endereco (`rua`,`logradouro`,`numero`,`complemento`,`bairro`,`uf`,`cidade`,`cep`) VALUES(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sisssiis",$rua,$logradouro,$numero,$complemento,$bairro,$uf,$cidade,$cep);
        if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
    }
    public function setDadosLogin($login,$senha){
        $stmt = $this->mysqli->prepare("INSERT INTO autenticacao (`login`,`senha`) VALUES(?,?) ");
        $stmt->bind_param("ss",$login,$senha);
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

    public function getIdAutenticacao(){
        $result = $this->mysqli->query("SELECT id FROM `autenticacao` ORDER BY id DESC LIMIT 1");
        $row = $result->fetch_array(MYSQLI_ASSOC);
        return $row['id'];
    }

    public function getDadosUsuarios(){
        $result = $this->mysqli->query("SELECT * FROM `usuarios`");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }

    public function deleteDadosUsuarios($idUsuario){
        if($this->mysqli->query("DELETE FROM `usuarios` WHERE `id_usuario` = '".$idUsuario."';")== TRUE){
            return true;
        }else{
            return false;
        }
    }

    public function pesquisaPorIdUsuarios($idUsuario){
        $result = $this->mysqli->query("SELECT * FROM `usuarios` WHERE `id_usuario`='$idUsuario'");
        return $result->fetch_array(MYSQLI_ASSOC);
    }

    public function updateDadosUsuarios($cpf,$nome,$telefone,$email,$cargo,$confsenha){
        $stmt = $this->mysqli->prepare("UPDATE `usuarios` SET (`cpf`=?, `nome`=?, `telefone`=?,`email`=?, `cargo`=?, `confsenha`=? WHERE `id_usuario`= ?");
        $stmt->bind_param("ssssss",$cpf,$nome,$telefone,$email,$cargo,$confsenha);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }

    public function updateDadosEndereco($rua,$logradouro,$numero,$complemento,$bairro,$cidade,$uf,$cep){
        $stmt = $this->mysqli->prepare("UPDATE `endereco` SET (`rua`=?,`logradouro`=?,`numero`=?,`complemento`=?,`bairro`=?,`cidade`=?,`uf`=?,`cel`=?) WHERE `id_endereco`= ?");
        $stmt->bind_param("ssssssss",$rua,$logradouro,$numero,$complemento,$bairro,$cidade,$uf,$cep);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }

    public function updateDadosLogin($login,$senha){
        $stmt = $this->mysqli->prepare("UPDATE  `autenticacao` SET (`login`=?,`senha`=?) WHERE `id`= ?");
        $stmt->bind_param("ss",$login,$senha);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }

    public function getUf(){
        $result = $this->mysqli->query("SELECT * FROM uf");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }

    public function getCidade(){
        $result = $this->mysqli->query("SELECT * FROM cidade");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
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

    public function getLogradouro(){
        $result = $this->mysqli->query("SELECT * FROM logradouro");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }

    /**
     * @return array
     */
    public function getDescricaoUsuarios(){
        $result = $this->mysqli->query("SELECT u.id_usuario, u.cpf, u.nome, u.telefone, u.email,u.cargo,u.confsenha, e.rua, e.numero, e.complemento,e.bairro, e.cep, log.logradouro, c.cidade, uf.uf, aut.login, aut.senha 
FROM usuarios AS u 
inner join endereco AS e on e.id_endereco = u.endereco 
inner join autenticacao AS aut on aut.id = u.autenticacao_id 
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