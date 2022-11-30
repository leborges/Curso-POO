<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<pre>
		<?php 
			require_once 'pessoa.php';
			require_once 'livro.php';

			$p[] = new Pessoa("Pedro", 22, "M");
			$p[] = new Pessoa("Maria", 31, "F");

			$l[] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
			$l[] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
			$l[] = new Livro("PHP Avançado", "Ana Paula", 800, $p[1]);

			foreach ($l as $k => $value) {
				$l[$k]->folhear(rand(0, $l[$k]->getTotPaginas()));
				$l[$k]->detalhes();
			}
		?>
	</pre>
</body>
</html>