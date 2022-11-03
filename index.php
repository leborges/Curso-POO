<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula - POO</title>
</head>
<body>
	<pre>
		<?php 
			require_once 'caneta.php';
#Aula 002
			// $c1 = new Caneta();
			// $c1->modelo = "Bic";
			// $c1->cor = "Azul";
			// $c1->ponta = 0.5;
			// $c1->carga = 90;
			// $c1->tampada = false;

			// $c1->tampar();

			// $c2 = new Caneta();
			// $c2->modelo = "Castle";
			// $c2->cor = "Verde";
			// $c2->ponta = 0.5;
			// $c2->carga = 50;
			// $c2->tampada = true;

			// print_r($c1);
			// echo "<br>";
			// print_r($c2);
		
#Aula 003
			$c1 = new Caneta();

			$c1->modelo = "BIC Crystal";
			$c1->cor = "Azul";
		#ERRO: Não podemos acessar variaveis que são declaradas privadas, só se estivermos dentro da mesma classe que ela
			// $c1->ponta = 0.5;

		#ERRO: Não podemos acessar variaveis que são declaradas protegidas
			// $c1->carga = 50;
			// $c1->tampada = true;
			
			print_r($c1);

			$c1->rabiscar();
			$c1->tampar();
			$c1->destampar();
		?>
	</pre>
</body>
</html>