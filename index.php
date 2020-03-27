<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Serafim</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<div class="box1">
		<div class="boxe"></div>
		<div class="boxd">
			<form action="login.php" method="POST">
				<h1>SERAFIM</h1>
				<input type="text" name="usuario" placeholder="EMAIL" required>
				<input type="password" name="senha" placeholder="SENHA" required>
				<input type="submit" name="acao" value="ENTRAR">
				<hr>
				<button><a href="cadastros.php">CADASTRAR</a></button>
			</form>


		</div>
	</div>


</body>
</html>