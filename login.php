<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">  
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">        
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="\css\estilos.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
        <?php 
          include_once("funcoes.php"); 
          include_once("conexao.php");
        ?>
    </head>

    <body>

    <?php
        if (isset($_POST['login'])) {
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
            
            $sql = "select * from usuario where usuario = '$usuario' and senha='$senha'";

            echo $sql;

            if ($usuarios = mysqli_query($link, $sql)) {
              if(mysqli_num_rows($usuarios) > 0) {

                while ($row = mysqli_fetch_assoc($usuarios)) {
                  $privilegio_aluno      = $row['privilegio_aluno'];
                  $privilegio_professor  = $row['privilegio_professor'];
                  $privilegio_secretaria = $row['privilegio_secretaria'];

                  session_start();
                  $_SESSION['usuario'] = $usuario;
                  $_SESSION['senha']   = $senha;
                  $_SESSION['privilegio_aluno']      = $privilegio_aluno;
                  $_SESSION['privilegio_professor']  = $privilegio_professor;
                  $_SESSION['privilegio_secretaria'] = $privilegio_secretaria;
                  $_SESSION['statusconexao'] = "Logado";
                }

                if ($_SESSION['privilegio_secretaria'] == 1) {
                  header("Location: /secretaria/index.php");
                } else if ($_SESSION['privilegio_professor'] == 1) {
                  header("Location: /professor/index.php");
                } else if ($_SESSION['privilegio_aluno'] == 1) {
                  header("Location: /aluno/index.php");
                }
                
              } else {
                echo "<p id=".'msg-tab-vazia"><h4>Usuário/Senha não localizado!</h4></p>';
              }
            } else {
              echo "Não foi possivel conectar - Entre em contato com suporte tecnico do sistema";
            }
        }
    ?>    
      <div class="container">
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
                    </div>

                      <div class="panel-body">
                          <form accept-charset="UTF-8" role="form" method="POST" >
                               <fieldset>
                                  <div class="form-group">
                                      <input class="form-control" placeholder="CPF" name="usuario" type="text" required>
                                   </div>

                                  <div class="form-group">
                                      <input class="form-control" placeholder="Senha" name="senha" type="password" value="" required>
                                  </div>

                                  <input name="login" class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                                </fieldset>
                          </form>
                      </div>
              </div>
            </div>
          </div>
      </div>
    </body>
</html>
