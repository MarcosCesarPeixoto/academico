<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">  
        <link rel="stylesheet" href="\css\estilos.css">      
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
        <?php 
          include_once("funcoes.php"); 
          date_default_timezone_set('America/Sao_Paulo');
        ?> 
        <title>Programação Web I</title>
    </head>

    <body>
        <table>                             
            <tr>
                <td id="cabecalho-logo">
                    <img src="earth-1217961_1280.png"> 
                </td>
                <td id="cabecalho-texto">  
                    <h1>Sistema Acadêmico</h1> 
                    <!-- <h2>Instituto Federal do Sudeste de Minas Gerais</h2> -->
                    <?php
                        exibirDataHora();
                    ?>
                </td>
            </tr>
        </table>
    </body>       
</html>