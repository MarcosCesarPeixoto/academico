<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">  
        <link rel="stylesheet" href="/css/estilos.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
        <title>Sistema Acadêmico</title>
    </head>

    <body>
        <div id="principal">
            <div id="cabecalho">
                <?php include "../cabecalho.php" ?>
            </div>

            <div id="menu">
                <?php include "menu.php" ?>
            </div>

            <div id="corpo">
              <?php  
                if(isset($_GET['tipo'])){
                  $tipo=$_GET['tipo'];
                } else {
                  $tipo='';
                }

                $pagina[1]="professores_inclusao.php";
                $pagina[2]="professores_alteracao.php";
                $pagina[3]="professores_exclusao.php";
                
                if (empty($tipo) or (!file_exists($pagina[$tipo]))) {
                  include "home.php";
                } else {
                  include $pagina[$tipo]; 
                };
              ?>
            </div>

            <div id="rodape">
                <?php include "../rodape.php" ?>
            </div>
        </div>
    </body>
</html>