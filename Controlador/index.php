<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Controle Remoto</title>
	<?php require_once 'controle_remoto.php' ?>
</head>
<body>
	<pre>
		<?php 
			$c = new ControleRemoto();
			$c->ligar();
			$c->maisVolume();

			$c->abrirMenu();
			echo "<br><br><br>";
			// echo print_r($c);
		?>
	</pre>
</body>
</html>