<?php
require_once("../model/conf.php");
$link = mysqli_connect(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);

if ($_POST){

    $erros = array();
    $login = $_POST['Login'];
    $senha = $_POST['Senha'];


    //echo $login;
    //echo "<br>";
    //echo $senha;


    if(empty($login) or empty($senha)){

        echo "<script>alert('Campos não podem ficar vazios!')</script>";

    }else{

        $sql = "SELECT * FROM autenticacao WHERE  login = '$login' and senha = '$senha'";
        $resultado = mysqli_query($link, $sql);

        //var_dump($resultado);

        if(mysqli_num_rows($resultado) > 0){
            // $senha = md5($senha);
                //$dados = mysqli_fetch_array($resultado);

                    header('location: tela-principal.php');

                 //var_dump($dados);
                /*
                $_SESSION['logado'] = true;
                $_SESSION['nomeComp'] = $dados['nomeComp'];
                $_SESSION['idusuarios'] = $dados['idCad'];

                echo  $dados['idCad'];

                */
                //
            //}
            }else{

                echo "<script>alert('Login ou Senha não conferem!')</script>";

            }

    }

}

?>

<!DOCTYPE html>
<html lang="pt-br"/>
<head>
    <meta charset="UTF-8"/>
    <title>RationTech - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../_css/estilo-login.css" >
    <script language="javascript" src="_javascript/funcoes.js"></script>
</head>

    <fieldset id="form">

       <header id="topo">
            <img id="logo" src="../_imagens/logo-medio.png"/>
        </header>

        <section id="acesso">
            <form method="post" action="">
            <label for="login">Login </label><br>
            <input type="text" id="login" name="Login" value="" placeholder="Nº de matrícula"/><br>
            <br>
            <label for="senha">Senha </label><br>
            <input type="password" id="senha" name="Senha" value="" placeholder="Senha"/><br>
            <br>
            <button type="submit" id="entrar">Entrar</button>
            </form>
        </section>


        <aside id="cofirmar-cadastro">
            <form method="post" action="cadastrar.php">
                <header id="cadastre-se">
                    <p>Novo por aqui?</p>
                    <p>Informe seu número de matrícula.</p>
                </header>
                <br>
                <label for="primeiro">Nº de matrícula </label>
                <input type="text" id="primeiro" name="Primeiro" value="" placeholder="Nº de matrícula"/><br>
                <br>
                <button id="verificar-matricula" onclick="window.location.href='wizard0.php'">Verificar</button>
            </form>
        </aside>


    </fieldset>
<footer id="base">
    <p><link>Termos e Condições de Uso</p>
</footer>

</body>
</html>