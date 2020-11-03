<?php
  session_start();

  if (isset($_SESSION['privilegio_aluno'])) {
    if($_SESSION['privilegio_aluno'] == 0){
      header("Location: ../index.php");
    } else {
      echo "<h1> Acesso de Aluno </h1>";
    }
  }else{
    header("Location: ../index.php");    
  }
?>