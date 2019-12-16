<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>RationTech - Relatórios</title>
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap-reboot.css">
</head>
<body>

<form method="post" action="">
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-1">
            <hr class="half-rule"/>
        </div>
        <div class="form-group col-md-0">
            Filtro de Relatórios
        </div>
        <div class="form-group col-lg-9">
            <hr class="half-rule"/>
        </div>
    </div>
    <div class="form-row mt-3 ml-3">
        <div class="radio pl-2">
            <label><input type="radio" name="tp-periodo" value="per-espec"> Período Específico</label>
        </div>
    </div>
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-3">
            <br/>
            <label for="data-ini">Data Inicial</label>
            <input type="date" name="data-ini" class="form-control" required><br/><br/>
        </div>
        <div class="form-group col-md-3">
            <br/>
            <label for="data-fin">Data Final</label>
            <input type="date" name="data-fin" class="form-control" required><br/><br/>
        </div>
    </div>
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-12">
            <hr class="half-rule ml-0"/>
        </div>
    </div>
    <div class="form-row mt-3 ml-3">
        <div class="radio pl-2">
            <label><input type="radio" name="tp-periodo" value="per-fechado"> Período Fechado</label>
        </div>
    </div>
    <div class="form-row mt-3 ml-3">
        <span class="form-row border border-secondary pt-2 pb-2 ml-1 w-75">
            <div class="col-3 pr-3">
                <label><input type="radio" name="periodo" value="diario"> Diário</label>
            </div>
            <div class="col-3 pr-3">
                <label"><input type="radio" name="periodo" value="diario"> Semanal</label>
            </div>
            <div class="col-3 pr-3">
                <label><input type="radio" name="periodo" value="diario"> Mensal</label>
            </div>
            <div class="col-3 pr-2">
                <label><input type="radio" name="periodo" value="diario"> Anual</label>
            </div>
        </span>
    </div>
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-1">
            <hr class="half-rule"/>
        </div>
        <div class="form-group col-md-0">
            Tipo de Relatório
        </div>
        <div class="form-group col-lg-9">
            <hr class="half-rule"/>
        </div>
    </div>
    <div class="form-row mt-3 ml-3">
        <div class="form-group col-md-3">
            <select class="form-control mt-1"><option value='0' selected disabled>Opções de Relatório</option></select>
        </div>
    </div>
    <div class="form-row mt-2 ml-3">
        <br/>
        <br/>
        <div class="form-group mt-3 ml-3">
            <button type="submit" class="btn btn-success" id="exportar">Exportar</button>
        </div>
        <br/>
        <br/>
        <div class="form-group mt-3 ml-3">
            <button type="submit" class="btn btn-success" id="visualizar">Visualizar</button>
        </div>
        <br/>
        <br/>
        <div class="form-group mt-3 ml-3">
            <button type="submit" class="btn btn-success" id="imprimir">Imprimir</button>
        </div>
        <br/>
        <br/>
    </div>
</form>
</body>
</html>