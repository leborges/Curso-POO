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
<header>
	<h1>Banco do Leonardo</h1>
	<h3>Seja bem-vindo(a)</h3>	
</header>

<form id="operacao" method="GET">
	<fieldset>
		<legend>Escolha a operação desejada</legend>
		<select name="operacao">
			<optgroup>
				<option value="abrirConta" id="abrirConta">Abrir conta</option>
				<option value="fecharConta" id="fecharConta">Fechar conta</option>
				<option value="depositar" id="depositar">Depositar</option>
				<option value="sacar" id="sacar">Sacar</option>
				<option value="pagarMensalidade" id="pagarMensalidade">Pagar mensalidade</option>
			</optgroup>
		</select>
	<button type="submit">Ir</button>
	</fieldset>
</form>
</body>
</html>