<?php
  $host = "localhost";
  $usuario = "root";
  $senha = "";
  $bd = "sistema_academico";
  
  $link = mysqli_connect($host, $usuario, $senha, $bd);
  if (!$link) {
      die('Não foi possível conectar: ' . mysql_error());
  }
  
  // echo 'Conexão bem sucedida';
  // mysqli_close($link);

?>