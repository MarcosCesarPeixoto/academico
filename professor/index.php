<?php
  session_start();

  if (isset($_SESSION['privilegio_professor'])) {
    if($_SESSION['privilegio_professor'] == 0){
      header("Location: ../index.php");
    } else {
      echo "<h1> Acesso de Professor </h1>";
    }
  }else{
    header("Location: ../index.php");    
  }
?>
