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

<form method="GET">
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

<?php 
$op = empty($_GET['operacao'])?"":$_GET['operacao'];
	switch ($op) {
		case 'abrirConta':
			$txt = "Abrir conta";
			break;
		case 'fecharConta':
			$txt = "Fechar conta";
			break;
		case 'depositar':
			$txt = "Realizar um depósito";
			break;
		case 'sacar':
			$txt = "Realizar um saque";
			break;
		case 'pagarMensalidade':
			$txt = "Pagar a mensalidade";
			break;
		default:
			$txt = "Favor selecionar operação";
			break;
	}
?>

<section id="exibe-operacao">
	<hgroup>
		<h1><?php echo $txt; ?></h1>
		<h4><?php if ($txt != "") {
			echo "Para prosseguir com a operação preencha os campos a seguir:";
		} ?></h4>
	</hgroup>
	<iframe src="iframe_banco.php#<?php echo $op; ?>" name="operacao" id="frame-banco"></iframe>
</section>
</body>
</html>