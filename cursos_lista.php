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
          date_default_timezone_set('America/Sao_Paulo');
        ?> 
        <title>Programação Web I</title>
    </head>

    <body>

            <div id="corpo">
              
              <table id="tabela-titulo">
                <tr>
                  <td id="col-titulo-subpagina">
                    <h2 id="titulo-subpagina">Lista de Cursos</h2>
                  </td>
                  <td id="col-btn-novo">
                    <a href="index.php?link=4" class="btn btn-success">Incuir Novo</a>
                    <!-- <input type="submit" value="Incluir Novo" style="background: #FFFFFF; font-weight: bold; font-size: 18px;"> -->
                  </td>
                </tr>
              </table>

              <?php
                $sql = "select * from cursos";
                $cursos = mysqli_query($link, $sql);

                if (mysqli_connect_errno()) {
                    printf("Connect failed: %s\n", mysqli_connect_error());
                    exit();
                }

                if ($cursos = mysqli_query($link, $sql)) {
                    if(mysqli_num_rows($cursos) > 0) {
                      echo "<table"." id="."'tabela-listas'"." border='1'>";
                      echo "<tr><td>Código</td>"
                          ."<td>Nome</td>"
                          ."<td style=width:100px></td>"
                          ."<td style=width:100px></td>"
                          ."</tr>";

                    } else {
                      echo "<p id=".'msg-tab-vazia"><h4>Nenhum curso cadastrado</h4></p>';
                    }

                    /* array associativo */
                    while ($row = mysqli_fetch_assoc($cursos)) {
                        $id = $row["id_curso"];

                        echo "<tr><td>".$row["id_curso"]."</td>"
                                ."<td>".$row["curso"]."</td>"
                                ."<td><a href='produtos_alteracao.php?id=$id'>Ver ou Editar</a></td>"
                                ."<td><a href='produtos_exclusao.php?id=$id'>Excluir</a></td>"
                            ."</tr>";
                    }
                    echo "</table>";

                    mysqli_free_result($cursos);
                }
              ?>
            </div>

      <script>
        function mostrar(elemento){
        var display = document.getElementById(elemento).style.display;
          if(display == "none"){
              document.getElementById(elemento).style.display = 'block';
          }else{
              document.getElementById(elemento).style.display = 'none';
          }    
      }
      </script>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>            
    </body>       
</html>