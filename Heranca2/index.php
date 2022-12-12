<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Herança - Parte 2</title>
	<?php
		require_once 'visitante.php';
		require_once 'aluno.php';
		require_once 'bolsista.php';
		require_once 'tecnico.php';
		require_once 'professor.php';
	?>
</head>
<body>
	<pre><br><br>
		<?php
		// $p1 = new Pessoa();
		$v1 = new Visitante();
		
		echo "<br>";
		print_r($v1);
		
		$v1->setNome("Leonardo");
		$v1->setIdade(23);
		$v1->setSexo("M");

		$a1 = new Aluno();
		
		echo "<br>";
		print_r($a1);

		$a1->setNome("João");
		$a1->setIdade(21);
		$a1->setMatricula(111);
		$a1->setSexo("M");
		$a1->setCurso("Informática");
		$a1->pagarMensalidade();

		$b1 = new Bolsista();
		
		echo "<br>";
		print_r($b1);

		$b1->setNome("Maria");
		$b1->setBolsa(12.5);
		$b1->setIdade(30);
		$b1->setMatricula(222);
		$b1->setSexo("F");
		$b1->setCurso("Psicologia");
		$b1->pagarMensalidade();

		$t1 = new Tecnico();
		
		echo "<br>";
		print_r($t1);

		$t1->setNome("Eduardo");
		$t1->setRegistroProfissional(532452);
		$t1->setIdade(25);
		$t1->setMatricula(333);
		$t1->setSexo("M");
		$t1->setCurso("Eneg. de Software");
		$t1->praticar();

		$p1 = new Professor();
		
		echo "<br>";
		print_r($p1);

		$p1->setNome("Marcelo");
		$p1->setSalario(5352);
		$p1->setIdade(35);
		$p1->setSexo("M");
		$p1->setEspecialidade("Programação");
		$p1->receberAumento(2000);
		?>
	</pre>
</body>
</html>