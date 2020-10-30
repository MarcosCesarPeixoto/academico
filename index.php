<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">  
        <link rel="stylesheet" href="estilos.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
        <title>Sistema Acadêmico</title>
    </head>

    <body>
        <div id="principal">
            <div id="cabecalho">
                <?php include "cabecalho.php" ?>
            </div>

            <div id="menu">
                <?php include "menu.php" ?>
            </div>    

            <div id="corpo">
              <?php  
                if(isset($_GET['link'])){
                  $link=$_GET['link'];
                } else {
                  $link='';
                }  

                $pagina[1]="home.php";
                // $pagina[2]="login.php";
                
                // $pagina[3]="clientes.php";
                // $pagina[4]="clientes_lista.php";

                // $pagina[5]="produto.php";
                // $pagina[6]="produtos_lista.php";
                
                if (empty($link) or (!file_exists($pagina[$link]))) {
                  include "home.php";
                } else {
                  include $pagina[$link]; 
                };
              ?>
            </div>

            <div id="rodape">
                <?php include "rodape.php" ?>
            </div>
        </div>
    </body>
</html>