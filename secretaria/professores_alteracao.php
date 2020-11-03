<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">  
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">        
        <link rel="stylesheet" href="\css\estilos.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
        <?php 
          include_once("../funcoes.php"); 
          include_once("../conexao.php");
        ?>
    </head>

    <body>
        <?php
            if(isset($_GET['id'])){
                $id=$_GET['id'];
            } else {
                $id=0;
            }  

            // echo "<h1> id recebido ".$id."!</h1>";

            $sql = "select * from professor where id_prof = '$id'";
            $professores = mysqli_query($link, $sql);

            if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            }

            if ($professores = mysqli_query($link, $sql)) {
              /* array associativo */
              while ($row = mysqli_fetch_assoc($professores)) {
                $id = $row["id_prof"];
                $nome = $row["nome"];
                $cpf = $row["cpf"];
                $rg = $row["rg"];
                $data_nascimento = $row["data_nascimento"];
                $salario = $row["salario"];
                $formacao_academica = $row["formacao_academica"];
            }

              mysqli_free_result($professores);
          }
        ?> 

        <form action="professoresDB.php?tipo=2" method="POST">
            <div>

              <tr>
                  <td id="col-titulo-subpagina">
                      <h2 id="titulo-subpagina">Alteração de Professor</h2>
                  </td>
              </tr>        

              <p> 
                  <table id="tabela-listas">
                      <td>
                          <input type="hidden" name="id" value="<?php echo $id; ?>" size="10">
                      </td>

                      <tr>
                          <td>
                              <label>Nome:</label>
                          </td>
                          <td>
                              <input name="nome" value="<?php echo $nome; ?>" size="50" required>
                          </td>
                      </tr>

                      <tr>
                          <td>
                              <label>CPF:</label>
                          </td>
                          <td>
                              <input name="cpf" value="<?php echo $cpf; ?>" size="15" 
                                       type="cpf" 
                                       placeholder="999.999.999-99" 
                                       pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}" required>

                          </td>
                      </tr>

                      <tr>
                          <td>
                              <label>RG:</label>
                          </td>
                          <td>
                              <input name="rg" value="<?php echo $rg; ?>" size="20">
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <label>Data de Nascimento:</label>
                          </td>
                          <td>
                              <input name="data_nascimento" value="<?php echo $data_nascimento; ?>" type="date" required>
                          </td>
                      </tr>

                      <tr>
                            <td>
                                <label>Salário:</label>
                            </td>
                            <td>
                                <input name="salario" value="<?php echo $salario; ?>" size="20">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Formação Acadêmica:</label>
                            </td>
                            <td>
                                <textarea name="formacao_academica" cols="60" rows="10"><?php echo $formacao_academica; ?></textarea>
                            </td>
                        </tr>
                  </table>
              </p>

              <table id="tabela-listas">
                  <tr>
                      <td>
                          <button class="btn btn-primary" type="submit">Gravar</button>
                      </td>
                      <td>
                          <a href="index.php?link=3" class="btn btn-success">Cancelar</a>
                      </td>
                  </tr>
              </table>

            </div>
        </form>
    </body>       
</html>