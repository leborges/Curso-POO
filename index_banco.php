<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Banco do Leonardo</title>
	<link rel="stylesheet" type="text/css" href="style_banco.css">
	<?php require_once 'banco.php'; ?>
</head>
<body>
<header id="cabecalho">
	<h1>BANCO DO LEONARDO</h1>
</header>
<nav>
	<table id="operacao">
		<ul>
			<li><a href="iframe_banco.php#abrirConta" target="operacao">Abrir conta</a></li>
			<li><a href="iframe_banco.php#fecharConta" target="operacao">Fechar conta</a></li>
			<li><a href="iframe_banco.php#depositar" target="operacao">Depositar</a></li>
			<li><a href="iframe_banco.php#sacar" target="operacao">Sacar</a></li>
			<li><a href="iframe_banco.php#pagarMensalidade" target="operacao">Pagar mensalidade</a></li>
		</ul>
	</table>
</nav>
<section id="exibe-operacao">
	<iframe src="iframe_banco.php" name="operacao" id="frame-banco"></iframe>
</section>
</body>
</html>