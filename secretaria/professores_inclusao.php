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
        <form action="professoresDB.php?id=$id&tipo=1" method="POST">
            <div>

                <tr>
                    <td id="col-titulo-subpagina">
                        <h2 id="titulo-subpagina">Cadastro de Professores</h2>
                    </td>
                </tr>
                <p>
                    <table id="tabela-listas">
                        <td>
                            <input type="hidden" name="id" >
                        </td>
                        <tr>
                            <td>
                                <label>Nome:</label>
                            </td>
                            <td>
                                <input name="nome" size="50" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>CPF:</label>
                            </td>
                            <td>
                                <input name="cpf" size="14" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>RG:</label>
                            </td>
                            <td>
                                <input name="rg" size="20">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Data de Nascimento:</label>
                            </td>
                            <td>
                                <input name="data_nascimento" type="date" >
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Salário:</label>
                            </td>
                            <td>
                                <input name="salario" size="20">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Formação Acadêmica:</label>
                            </td>
                            <td>
                                <textarea name="formacao_academica" cols="60" rows="10"></textarea>
                            </td>
                        </tr>
                    </table>
                </p>

                <p>
                    <table id="tabela-listas">
                        <tr>
                            <td>
                                <button class="btn btn-primary" type="submit">Gravar</button>
                            </td>
                            <td>
                                <a href="index.php?link=3" class="btn btn-success">Cancelar</a>
                            </td>
                        </td>
                    </table>
                </p>
            </div>

        </form>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>            

    </body>

</html>