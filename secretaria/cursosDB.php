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
            $curso = $_POST['curso'];

            // echo "<h1> id recebido ".$id."!</h1>";

            if ($tipo == 1) {
                $sql = "insert into cursos (curso) values ('$curso')";
                $acao = "cadastrado";
            } else if ($tipo == 2) {
                $sql = "update cursos set curso = '$curso' where id_curso='$id'";
                $acao = "alterado";
            } else if ($tipo == 3) {
                $sql = "delete from cursos where id_curso='$id'";
                $acao = "excluido";
            } else {
               echo "<h1 style=".'"color: red"'.">Tipo de Processo incompatível!'$tipo'</h1>";
               exit;
            }

            //echo $sql;
            if (mysqli_query($link, $sql)) {
                if (mysqli_affected_rows($link) > 0) {
                    echo "<h1> Curso ".$acao." com sucesso!</h1>";
                } else {
                    echo "<h1 style=".'"color: red"'."> Nenhum registro de Curso ".$acao."!</h1>";
                }
            } else {
                die("Falha na gravação de dados!" . mysqli_error($link));
            }
        ?>

        <!-- <script>window.location="index.php?link=3";</script>"; -->
    </body>
</html>