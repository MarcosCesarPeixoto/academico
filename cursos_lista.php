<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">  
        <link rel="stylesheet" href="\css\estilos.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
        <?php 
          include_once("funcoes.php"); 
          include_once("conexao.php");
          date_default_timezone_set('America/Sao_Paulo');
        ?> 
        <title>Programação Web I</title>
    </head>

    <body>

            <div id="corpo">
              <h2 id="titulo-subpagina">Lista de Cursos</h2>

              <?php
                $sql = "select * from cursos";
                $cursos = mysqli_query($link, $sql);

                if (mysqli_connect_errno()) {
                    printf("Connect failed: %s\n", mysqli_connect_error());
                    exit();
                }

                if ($cursos = mysqli_query($link, $sql)) {
                    //if(mysqli_num_rows($cursos) > 0) {
                      // echo "<table border='1'>";
                      echo "<table"." id="."'tabela-listas'"." border='1'>";
                      echo "<tr><td>Código</td>"
                          ."<td>Nome</td>"
                          ."<td style=width:100px></td>"
                          ."<td style=width:100px></td>"
                          ."<td style=width:100px></td>"
                          ."</tr>";

                    //}

                    /* array associativo */
                    while ($row = mysqli_fetch_assoc($cursos)) {
                        $id = $row["id_produto"];

                        echo "<tr><td>".$row["id_curso"]."</td>"
                                ."<td>".$row["curso"]."</td>"
                                ."<td><a href='produtos_alteracao.php?id=$id'>Visualizar</a></td>"
                                ."<td><a href='produtos_exclusao.php?id=$id'>Excluir</a></td>"
                                ."<td><a href='produtos_exclusao.php?id=$id'>Novo</a></td>"
                            ."</tr>";
                    }
                    echo "</table>";

                    // if(mysqli_num_rows($cursos) = 0) {
                    //   echo "<h3>Nenhum curso cadastrado</h3>";
                    // }

                    mysqli_free_result($cursos);
                }
              ?>
             
              <!-- <p>
                  <input type="submit" value="Incluir Novo" style="background: #FFFFFF; font-weight: bold; font-size: 18px;">
              </p> -->

            </div>
    </body>       
</html>