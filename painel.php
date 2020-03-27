<?php

session_start();
include 'verifica_login.php';
include 'conexao.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Serafim</title>
	<link rel="stylesheet" type="text/css" href="css/painel.css">
</head>
<body>

	<div class="topo"></div>
	<div class="container">
	<div class="bar">
     
    <div class="ft">
	<div class="foto"></div>
	<div class="usuario">
	<h1><?php echo $_SESSION['usuario'];?></h1>
     </div>

	</div>
	<div class="clear"></div>
	


	<div class="menu">
		<ul>
			<li><a href="#">Perfil</a></li>
            <li><a href="#">Amigos</a></li>
            <li><a href="#">Bate-Papo</a></li>
            <li><a href="#">Notícias</a></li>
            <li><a href="#">Configuracao</a></li>
            <li><a href="logout.php">Sair</a></li>
		</ul>
	</div>
	<hr>

	</div>
	<div class="centro"></div>
    </div>

</body>
</html>

	<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
<h2><a href="logout.php">SAIR</a></h2>