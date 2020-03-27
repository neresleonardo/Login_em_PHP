<?php
session_start();
include('conexao.php');

// Empty = Vazio. Se um dos formularios estiver vazio ele volta para a pasta Index.php
	if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

	$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
	$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

	$query = "select nome from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";


	$result = mysqli_query($conexao, $query);
 
	$row = mysqli_num_rows($result);

	if ($row ==1) {
		$_SESSION['usuario'] = $usuario;
		header('Location: painel.php');
}
	else {
		header('Location: index.php');
		exit(); }
?>