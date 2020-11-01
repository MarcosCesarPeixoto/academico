<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">  
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">        
        <link rel="stylesheet" href="\css\estilos.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
        <?php 
          include_once("funcoes.php"); 
          include_once("conexao.php");
        ?>
    </head>

    <body>
        <?php
            if(isset($_GET['id'])){
                $id=$_GET['id'];
            } else {
                $id=0;
            }  

            echo "<h1> id recebido ".$id."!</h1>";

            $sql = "select * from cursos where id_curso = '$id'";
            $cursos = mysqli_query($link, $sql);

            // if (mysqli_connect_errno()) {
            //     printf("Connect failed: %s\n", mysqli_connect_error());
            //     exit();
            // }

            if ($cursos = mysqli_query($link, $sql)) {
                /* array associativo */
                while ($row = mysqli_fetch_assoc($cursos)) {
                    $id_curso = $row["id_curso"];
                    $curso = $row["curso"];

                    echo "<h1> id do banco ".$id_curso."!</h1>";

                    // $pagina[3]="curso.php";
                    // $link=3;
                }

                mysqli_free_result($cursos);
            }
        ?> 

        <form action="cursosDB.php?tipo=2" method="POST">
            <h2>Alteração de Cursos</h2>
            <p> 
                <!-- <table id="tabela-listas"> -->
                <table>
                    <tr>
                        <td></td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $id; ?>" size="10">
                        </td>
                        <tr>
                            <td>
                                <label>Curso:</label>
                            </td>
                            <td>
                                <input name="curso" value="<?php echo $curso; ?>" size="50">
                            </td>
                        </tr>
                    </tr>
                </table>
            </p>

            <p>
                <td>
                    <tr>
                        <button class="btn btn-primary" type="submit">Gravar</button>
                    </tr>
                    <tr>
                        <a href="index.php?link=4" class="btn btn-success">Cancelar</a>
                    </tr>
                </td>
            </p>
        </form>
    </body>       
</html>