<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercício 01</title>
	<?php require_once 'Video.php'; ?>
	<?php require_once 'Gafanhoto.php'; ?>
	<?php require_once 'Visualizacao.php'; ?>
</head>
<body>
	<pre>
		<?php
			$v[0] = new Video("Curso em Video");
			$v[1] = new Video("Aula 12 de POO");
			$v[2] = new Video("Aula 15 de PHP");
			$p[0] = new Gafanhoto("Leonardo Borges", 23, "M","leonardo.borges");
			$p[1] = new Gafanhoto("Renato Lara", 45, "M","renato.lara");
			$p[2] = new Gafanhoto("Marcelo Sost", 30, "M","marcelo.sost");

			$vis[0] = new Visualizacao($p[0], $v[0]);
			$vis[1] = new Visualizacao($p[1], $v[0]);
			$vis[2] = new Visualizacao($p[0], $v[0]);

			$vis[0]->avaliar();
			$vis[1]->avaliarNota(10);
			$vis[2]->avaliarNota(10);

			print_r($v[0]);
		?>
	</pre>
</body>
</html>