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
        <!-- Verifica se passou o id na URL. Se afirmativo é uma Edição ou Exclusão
        Carregar os dados e apresentar ao usuário -->
        <!-- <php
            if(isset($_GET['id'])){
              echo "aqui"
            } else {
                $id=0;
                $curso="";
            }  

        ?> -->

        <form action="cursosDB.php?id=$id&tipo=1" method="POST">
            <h2>Cadastro de Cursos</h2>
            <p>
                <tr>
                    <td>
                        <label>Curso:</label>
                    </td>
                    <td>
                        <input name="curso" size="50" value="<?php echo $curso; ?>">
                    </td>
                <td>
            </p>

            <p>
                <tr>
                    <td>
                        <button class="btn btn-primary" type="submit">Gravar Curso</button>
                    </td>
                    <td>
                        <a href="index.php?link=4" class="btn btn-success">Cancelar</a>
                    </td>
                </td>
            </p>

        </form>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>            

      <!-- <php
        function exibir_mensagem() {
            echo "Olá";
        }
      ?> -->

    </body>

</html>