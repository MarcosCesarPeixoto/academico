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

            $sql = "select * from aluno where id_aluno = '$id'";
            $alunos = mysqli_query($link, $sql);

            // echo var_dump($alunos);

            if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            }

            if ($alunos = mysqli_query($link, $sql)) {
                /* array associativo */
                while ($row = mysqli_fetch_assoc($alunos)) {
                    $id = $row["id_aluno"];
                    $nome = $row["nome"];
                    $cpf = $row["cpf"];
                    $rg = $row["rg"];
                    $data_nascimento = $row["data_nascimento"];
                    $mae = $row["mae"];
                    $pai = $row["pai"];
                    $estado = $row["estado"];
                    $cidade = $row["cidade"];
                    $bairro = $row["bairro"];
                    $endereco = $row["endereco"];
                    $telefone = $row["telefone"];
                }

                mysqli_free_result($alunos);
            }
        ?> 

        <form id="form-manipulacao" action="alunosDB.php?id=$id&tipo=3" method="POST" >
            <div>

                <!-- <tr> -->
                    <td id="col-titulo-subpagina">
                        <h2 id="titulo-subpagina">Exclusão de Aluno</h2>
                    </td>
                <!-- </tr> -->

                <p> 
                    <table id="tabela-listas">
                        <!-- <tr> -->
                            <td></td>
                            <td>
                                <input type="hidden" name="id" value="<?php echo $id; ?>" size="10">
                            </td>
                        <!-- </tr> -->
                        <tr>
                            <td>
                                <label>Aluno:</label>
                            </td>
                            <td>
                                <input name="nome" value="<?php echo $nome; ?>" size="50">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>CPF:</label>
                            </td>
                            <td>
                                <input name="cpf" value="<?php echo $cpf; ?>" size="15">
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
                                <input name="data_nascimento" value="<?php echo $data_nascimento; ?>" type="date" >
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Mâe:</label>
                            </td>
                            <td>
                                <input name="mae" value="<?php echo $mae; ?>" size="50">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Pai:</label>
                            </td>
                            <td>
                                <input name="pai" value="<?php echo $pai; ?>" size="50">
                            </td>
                        </tr>
   
                        <tr>
                            <td>
                                <label>Estado:</label>
                            </td>
                            <td>
                                <input name="estado" value="<?php echo $estado; ?>" size="02">
                            </td>
                        </tr>
   
                        <tr>
                            <td>
                                <label>Cidade:</label>
                            </td>
                            <td>
                                <input name="cidade" value="<?php echo $cidade; ?>" size="30">
                            </td>
                        </tr>
   
                        <tr>
                            <td>
                                <label>Bairro:</label>
                            </td>
                            <td>
                                <input name="bairro" value="<?php echo $bairro; ?>" size="30">
                            </td>
                        </tr>
   
                        <tr>
                            <td>
                                <label>Endereço:</label>
                            </td>
                            <td>
                                <input name="endereco" value="<?php echo $endereco; ?>" size="50">
                            </td>
                        </tr>
   
                        <tr>
                            <td>
                                <label>Telefone:</label>
                            </td>
                            <td>
                                <input name="telefone" value="<?php echo $telefone; ?>" size="15" >
                            </td>
                        </tr>

                    </table>
                </p>

                <table id="tabela-listas">
                    <tr>
                        <td>
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </td>
                        <td>
                            <a href="index.php?link=2" class="btn btn-success">Cancelar</a>
                        </td>
                    </tr>
                </table>
                
            </div>
        </form>
    </body>
</html>