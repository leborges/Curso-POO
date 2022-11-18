<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Banco do Leonardo</title>
	<link rel="stylesheet" type="text/css" href="style_banco.css">
	<?php 
		require_once 'banco.php';
		$p1 = new ContaBanco();
	?>
	<style type="text/css">
		div#abrirConta {
			display: <?php echo empty($_GET['abrirConta'])?"none":$_GET['abrirConta']; ?>;
		}

		div#fecharConta {
			display: <?php echo empty($_GET['fecharConta'])?"none":$_GET['fecharConta']; ?>;
		}
		
		div#depositar {
			display: <?php echo empty($_GET['depositar'])?"none":$_GET['depositar']; ?>;
		}
		
		div#sacar {
			display: <?php echo empty($_GET['sacar'])?"none":$_GET['sacar']; ?>;
		}
		
		div#pagarMensalidade {
			display: <?php echo empty($_GET['pagarMensalidade'])?"none":$_GET['pagarMensalidade']; ?>;
		}
	</style>
</head>
<body>

<header id="cabecalho">
	<h1>BANCO DO LEONARDO</h1>
</header>

<nav>
	<table id="operacao">
		<ul>
			<li><a href="index.php?abrirConta=show">Abrir conta</a></li>
			<li><a href="index.php?fecharConta=show">Fechar conta</a></li>
			<li><a href="index.php?depositar=show">Depositar</a></li>
			<li><a href="index.php?sacar=show">Sacar</a></li>
			<li><a href="index.php?pagarMensalidade=show">Pagar mensalidade</a></li>
		</ul>
	</table>
</nav>

<section id="exibe-operacao">
<div id="abrirConta">
	<article id="abrirConta">
		<form method="POST">
			<input type="number" name="tConta" id="cConta" maxlength="3" placeholder="Número da conta - 3 Digitos"><br>
			<input type="text" name="tName" id="cName" placeholder="Seu nome completo"><br>
			<label for="cTipo">Selecione o tipo de conta:</label><br><br>
			<input type="radio" class="radio" name="tTipo" id="CC" value="CC" checked>
			<label for="CC">Conta Corrente</label><br>
			<input type="radio" class="radio" name="tTipo" id="CP" value="CP">
			<label for="CP">Conta Poupança</label>
			<div class="center">
				<button type="submit" name="btnCriarConta">Criar conta</button>
			</div>
		</form>
	</article>
</div>
<?php 
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if (isset($_POST['btnCriarConta'])) {
			$p1->abrirConta($_POST['tTipo']);
			$p1->setDono($_POST['tName']);
			$p1->setNum($_POST['tConta']);
		}
	}
 ?>

<div id="fecharConta">
	<article id="fecharConta">
		<form method="POST">
			<div>Caro senhor(a), tem certeza de que desejas fechar sua conta?</div>
			<div class="center">
				<button type="submit" name="btnFecharConta">Fechar conta</button>
			</div>
		</form>
	</article>
</div>
<?php 
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if (isset($_POST['btnFecharConta'])) {
			$p1->fecharConta();
		}
	}
 ?>

<div id="depositar">
	<article id="depositar">
		<form method="POST">
			<label for="cDeposito">Valor em R$ </label>
			<input type="number" name="tDeposito" id="cDeposito">
			<div class="center">
				<button type="submit">Depositar</button>
			</div>
		</form>
	</article>
</div>

<div id="sacar">
	<article id="sacar">
		<form method="POST">
			<label for="cSaque">Valor em R$ </label>
			<input type="number" name="tSaque" id="cSaque">
			<div class="center">
				<button type="submit">Sacar</button>
			</div>
		</form>
	</article>
</div>

<div id="pagarMensalidade">
	<article id="pagarMensalidade">
		<form method="POST">
			<div>Os valores são: <br><br>Conta Corrente <b>R$12,00</b><br>Conta Poupança <b>R$20,00</b></div>
			<div class="center">
				<button type="submit" name="pagarMensalidade" value="pagarMensalidade" onclick="pagarMensalidade()">Pagar mensalidade</button>
			</div>
		</form>
	</article>
</div>
</section>

<pre>
<?php 
	echo print_r($p1);
?>
 </pre>
</body>
</html>