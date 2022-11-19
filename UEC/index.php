<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lutadores</title>
	<?php require_once 'luta.php'; ?>
</head>
<body>
<pre>
	<?php 
		
		$l[] = new Lutador(
			"Pretty Boy",
			"França",
			30,
			1.75,
			90.9,
			11,
			2,
			1
		);

		$l[] = new Lutador(
			"Putscript",
			"Brasil",
			29,
			1.68,
			57.8,
			14,
			2,
			3
		);

		$l[] = new Lutador(
			"Snapshadow",
			"EUA",
			35,
			1.65,
			80.9,
			12,
			2,
			1
		);
		
		$l[] = new Lutador(
			"Dead Code",
			"Australia",
			28,
			1.93,
			81.6,
			13,
			0,
			2
		);
		
		$l[] = new Lutador(
			"UFOCobol",
			"Brasil",
			37,
			1.70,
			119.3,
			5,
			4,
			3
		);
		
		$l[] = new Lutador(
			"Nerddart",
			"EUA",
			30,
			1.81,
			105.7,
			12,
			2,
			4
		);

		// foreach ($l as $key => $value) {
		// 	$l[$key]->apresentar();
		// }

		$luta = new Luta();
		$luta->marcarLuta($l[4],$l[5]);
		$luta->lutar();
	?>
</pre>
</body>
</html>