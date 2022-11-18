<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Frame do banco</title>
	<link rel="stylesheet" type="text/css" href="style_banco.css">
	<?php
		require_once 'banco.php';
		$p1 = new ContaBanco();
	?>
</head>
<body id="noscroll">
<header>
	<h1>Selecione alguma opção para continuar</h1>
</header>
<section>
	<article id="topo"></article>
	<article id="abrirConta">
		<form method="GET">
			<input type="number" name="tConta" id="cConta" maxlength="3" placeholder="Número da conta - 3 Digitos"><br>
			<input type="text" name="tName" id="cName" placeholder="Seu nome completo"><br>
			<label for="cTipo">Selecione o tipo de conta:</label><br><br>
			<input type="radio" class="radio" name="tTipo" id="CC" value="CC" checked>
			<label for="CC">Conta Corrente</label><br>
			<input type="radio" class="radio" name="tTipo" id="CP" value="CP">
			<label for="CP">Conta Poupança</label>
			<div class="center">
				<button type="submit" name="btnCriarConta">Criar conta</button>
				<?php 
					if ($_SERVER['REQUEST_METHOD'] === 'GET') {
						if (isset($_GET['btnCriarConta'])) {
							$p1->abrirConta($_GET['tTipo']);
							$p1->setDono($_GET['tName']);
							$p1->setNum($_GET['tConta']);
						}
					}
				 ?>
			</div>
		</form>
	</article>
	<article id="fecharConta">
		<form method="GET">
			<div>Caro senhor(a), tem certeza de que desejas fechar sua conta?</div>
			<div class="center">
				<button type="submit" class="operacao" name="fecharConta" value="fecharConta">Fechar conta</button>
			</div>
		</form>
		<div class="msgBox">
			<?php 
				if (isset($_REQUEST['fecharConta'])) {
					$p1->fecharConta();
				};
			 ?>
		</div>
	</article>
	<article id="depositar">
		<form method="GET">
			<label for="cDeposito">Valor em R$ </label>
			<input type="number" name="tDeposito" id="cDeposito">
			<div class="center">
				<button type="submit">Depositar</button>
			</div>
		</form>
	</article>
	<article id="sacar">
		<form method="GET">
			<label for="cSaque">Valor em R$ </label>
			<input type="number" name="tSaque" id="cSaque">
			<div class="center">
				<button type="submit">Sacar</button>
			</div>
		</form>
	</article>
	<article id="pagarMensalidade">
		<form method="GET">
			<div>Os valores são: <br><br>Conta Corrente <b>R$12,00</b><br>Conta Poupança <b>R$20,00</b></div>
			<div class="center">
				<button type="submit" name="pagarMensalidade" value="pagarMensalidade" onclick="pagarMensalidade()">Pagar mensalidade</button>
			</div>
		</form>
	</article>
</section>
</body>
</html>