<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Frame do banco</title>
	<link rel="stylesheet" type="text/css" href="style_banco.css">
	<?php require_once 'banco.php'; ?>
</head>
<body id="noscroll">
<article id="topo"></article>
<article id="abrirConta">
	<form method="GET">
		<label for="cConta">Conta </label>
		<input type="number" name="tConta" id="cConta" maxlength="3"><br>
		<label for="cName">Nome completo </label>
		<input type="text" name="tName" id="cName">
		<label for="cTipo">Tipo de conta </label>
		<select name="tTipo" id="cTipo">
			<optgroup>
				<option>Conta Corrente</option>
				<option>Conta Salário</option>
			</optgroup>
		</select><br>
		<button type="submit">Criar conta</button>
	</form>
</article>
<article id="fecharConta">fecharConta</article>
<article id="depositar">depositar</article>
<article id="sacar">sacar</article>
<article id="pagarMensalidade">pagarMensalidade</article>
</body>
</html>