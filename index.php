<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula - POO</title>
</head>
<body>
	<?php 
		require_once 'caneta.php';

		$c1 = new Caneta();
		$c1->modelo = "Bic";
		$c1->cor = "Azul";
		$c1->ponta = 0.5;
		$c1->carga = 90;
		$c1->tampada = false;

		$c1->tampar();

		$c2 = new Caneta();
		$c2->modelo = "Castle";
		$c2->cor = "Verde";
		$c2->ponta = 0.5;
		$c2->carga = 50;
		$c2->tampada = true;

		print_r($c1);
		echo "<br>";
		print_r($c2);
	?>
</body>
</html>