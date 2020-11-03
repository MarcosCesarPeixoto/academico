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
            $mae = $_POST['mae'];
            $pai = $_POST['pai'];
            $estado = $_POST['estado'];
            $cidade = $_POST['cidade'];
            $bairro = $_POST['bairro'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            
            // echo "<h1> id recebido ".$id."!</h1>";

            if ($tipo == 1) {
                $sql = "insert into aluno (nome, cpf, rg, data_nascimento, mae, pai, estado, cidade, bairro, endereco, telefone) values ('$nome', '$cpf', '$rg', '$data_nascimento', '$mae', '$pai', '$estado', '$cidade', '$bairro', '$endereco', '$telefone')";
                $acao = "cadastrado";
            } else if ($tipo == 2) {
                $sql = "update aluno set nome='$nome', cpf='$cpf', rg='$rg', data_nascimento='$data_nascimento', mae='$mae', pai='$pai', estado='$estado',
                cidade='$cidade', bairro='$bairro', endereco='$endereco', telefone='$telefone' where id_aluno='$id'";
                $acao = "alterado";
            } else if ($tipo == 3) {
                $sql = "delete from aluno where id_aluno='$id'";
                $acao = "excluido";
            } else {
               echo "<h1 style=".'"color: red"'.">Tipo de Processo incompatível!'$tipo'</h1>";
               exit;
            }

            // echo $sql;
            if (mysqli_query($link, $sql)) {
                if (mysqli_affected_rows($link) > 0) {
                    echo "<h1> Aluno ".$acao." com sucesso!</h1>";
                } else {
                    echo "<h1 style=".'"color: red"'."> Nenhum registro de Aluno ".$acao."!</h1>";
                }
            } else {
                die("Falha na gravação de dados!" . mysqli_error($link));
            }
        ?>

        <!-- <script>window.location="index.php?link=3";</script>"; -->
    </body>
</html>