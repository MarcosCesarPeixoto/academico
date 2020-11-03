<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">  
        <link rel="stylesheet" href="estilos.css">      
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
        <?php 
          include_once("../funcoes.php"); 
          include_once("../conexao.php");
        ?>
    </head>

    <body>
        <?php
            //echo var_dump($_GET, $_POST);

            if(isset($_GET['tipo'])){
                $tipo = $_GET['tipo'];
            } else {
                $tipo = 0;
            }

            if(isset($_POST['id'])){
                $id = $_POST['id'];
            }
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $rg = $_POST['rg'];
            $data_nascimento = $_POST['data_nascimento'];
            $salario = $_POST['salario'];
            $formacao_academica = $_POST['formacao_academica'];
            
            // echo "<h1> id recebido ".$id."!</h1>";

            if ($tipo == 1) {
                $sql = "insert into professor (nome, cpf, rg, data_nascimento, salario, formacao_academica) values ('$nome', '$cpf', '$rg', '$data_nascimento', '$salario', '$formacao_academica')";
                $acao = "cadastrado";
            } else if ($tipo == 2) {
                $sql = "update professor set nome='$nome', cpf='$cpf', rg='$rg', data_nascimento='$data_nascimento', salario='$salario', formacao_academica='$formacao_academica' where id_prof='$id'";
                $acao = "alterado";
            } else if ($tipo == 3) {
                $sql = "delete from professor where id_prof='$id'";
                $acao = "excluido";
            } else {
               echo "<h1 style=".'"color: red"'.">Tipo de Processo incompatível!'$tipo'</h1>";
               exit;
            }

            // echo $sql;
            if (mysqli_query($link, $sql)) {
                if (mysqli_affected_rows($link) > 0) {
                    echo "<h1> Professor ".$acao." com sucesso!</h1>";
                } else {
                    echo "<h1 style=".'"color: red"'."> Nenhum registro de Professor ".$acao."!</h1>";
                }
            } else {
                die("Falha na gravação de dados!" . mysqli_error($link));
            }
        ?>

        <!-- <script>window.location="index.php?link=3";</script>"; -->
    </body>
</html>