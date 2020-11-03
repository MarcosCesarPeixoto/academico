<?php
  require "conexao.php";
  @session_star();

  $usuario = $_SESSION['usuario'];
  $senha   = $_SESSION['senha'];
  $privilegio_aluno      = $_SESSION['privilegio_aluno'];
  $privilegio_professor  = $_SESSION['privilegio_professor'];
  $privilegio_secretaria = $_SESSION['privilegio_secretaria'];

  if (($usuario == '') or ($senha == '')) {
    echo "<script language='javascript'>window.location='/index.php';</script>";
  } else {
    echo "usuario preenchido";
  }

?>