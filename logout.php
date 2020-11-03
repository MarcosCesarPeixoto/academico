<?php
	session_start();
	
	unset(
		$_SESSION['usuario'],
		$_SESSION['senha'],
		$_SESSION['privilegio_aluno'],
		$_SESSION['privilegio_professor'],
		$_SESSION['privilegio_secretaria']
	);
	
	// $_SESSION['logadodeslogado'] = "Deslogado com sucesso";

	//redirecionar o usuario para a página de login
	header("Location: index.php");
?>