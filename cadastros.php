<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Serafim</title>
	<link rel="stylesheet" type="text/css" href="css/cadastrar.css">
</head>
<body>

	<div class="box1">
		<div class="boxe"></div>
		<div class="boxd">
			<form action="cadastrar.php" method="POST">
				<h1>SERAFIM</h1>
				<input type="text" name="nome" placeholder="Email" required>
				<input type="text" name="usuario" placeholder="Primeiro Nome" required>
				<input type="password" name="senha" placeholder="Senha" required>
				<input type="submit" name="acao" value="CADASTRAR">
				<hr>
			</form>

		</div>
	</div>


</body>
</html>