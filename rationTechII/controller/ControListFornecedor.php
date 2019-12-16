<?php
require_once("../model/operacoesBancoFornecedores.php");

class listarFornecedor
{
    private $listaFor;

    public function __construct()
    {
        $this->listaFor = new OperacoesBancoFornecedores();
        $this->renderListaFornecedor();
    }

    private function renderListaFornecedor()
    {
        $row = $this->listaFor->getDescricaoFornecedores();
        echo "<select name='fornecedor_id' class='form-control mt-2'><option value='0' selected disabled>Selecione</option>";
        foreach ($row as $value) {
            echo "<option value='" . $value['id_fornecedor'] . "'>" . $value['razaosocial'] . "</option>";
        }
        echo "</select>";
    }
}

?>
