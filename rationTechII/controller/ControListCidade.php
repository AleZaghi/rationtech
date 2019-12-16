<?php
require_once("../model/operacoesBancoUsuarios.php");

class listarCidade{
    private $lista;

    public function __construct(){
        $this->lista = new OperacoesBancoUsuarios();
        $this->renderListaCidade();
    }

    private function renderListaCidade(){
        $row = $this->lista->getCidade();
        echo "<select name='cidade' class='form-control mt-2'><option value='0' selected disabled>Selecione</option>";
        foreach ($row as $value) {
                echo "<option value='" . $value['id_cidade'] . "'>" . $value['cidade'] . "</option>";
            }

        echo "</select>";
    }

    private function renderListaCidadePorUFU($idUF){
        $row = $this->lista->getCidadePorUF($idUF);
        echo "<select name='cidade' class='form-control mt-2'><option value='0' selected disabled>Selecione</option>";
        foreach ($row as $value) {
            echo "<option value='" . $value['id_cidade'] . "'>" . $value['cidade'] . "</option>";
        }

        echo "</select>";
    }
}
if(isset($_POST['ufSelecionada']))
{
    $idUF = $_POST['ufSelecionada'];

    $sql = "SELECT * FROM cidade WHERE id_uf='$idUF'";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        while($row = $resultado->fetch_assoc())
        {
            echo "<option value=".$row['id_cidade'].">".$row['cidade']."</option>";
        }
    }
    exit;
}
?>