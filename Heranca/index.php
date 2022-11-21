<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Herança</title>
</head>
<body>
	<pre>
	<?php 
		require_once 'pessoa.php';
		require_once 'aluno.php';
		require_once 'funcionario.php';
		require_once 'professor.php';

		$p1 = new Pessoa("Pedro", 25, "M");
		$p2 = new Aluno("Maria", 30, "F");
		$p3 = new Professor("Claúdio", 18, "M");
		$p4 = new Funcionario("Fabiana", 20, "F");

		$p2->setCurso("Informática");
		$p3->setSalario(2500.75);
		$p4->setSetor("Estoque");

		$p2->cancelarMatricula();
		$p3->receberAum(550.20);
		$p4->mudarTrabalho();

		echo print_r($p1)."<hr>";
		echo print_r($p2)."<hr>";
		echo print_r($p3)."<hr>";
		echo print_r($p4)."<hr>";

	?>
	</pre>
</body>
</html>