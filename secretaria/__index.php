<!-- <h1> Acesso de Secretaria </h1> -->
<?php
  session_start();
  

  if($_SESSION['privilegio_secretaria'] == "0"){
    echo "<h1>redirecionar para login</h1>";
  }else{
    echo "<h1> Acesso de Secretaria </h1>";
  }


  // $_SESSION['privilegio_aluno']      = $privilegio_aluno;
  //                   $_SESSION['privilegio_professor']  = $privilegio_professor;
  //                   $_SESSION['privilegio_secretaria'] = $privilegio_secretaria;
  

?>