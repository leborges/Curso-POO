<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Polimorfismo - Parte 1</title>
	<?php
		require_once 'mamifero.php';
		require_once 'reptil.php';
		require_once 'peixe.php';
		require_once 'ave.php';
		require_once 'arara.php';
		require_once 'canguru.php';
		require_once 'cachorro.php';
		require_once 'tartaruga.php';
		require_once 'goldfish.php';
		require_once 'cobra.php';
	?>
</head>
<body>
	<?php
		$m = new Mamifero();
		$r = new Reptil();
		$p = new Peixe();
		$a = new Ave();
		$h = new Arara();
		$c = new Canguru();
		$k = new Cachorro();
		$t = new Tartaruga();
		$g = new Goldfish();
		$s = new Cobra();

	echo "O <b>mamifero</b> se locomove: ";
		$m->locomover();
		$m->setPeso(85.3);
		$m->setIdade(4);
		$m->setMembros(4);
	echo "O <b>reptil</b> se locomove: ";
		$r->locomover();
		$r->setPeso(1.2);
		$r->setIdade(2);
		$r->setMembros(4);
	echo "O <b>peixe</b> se locomove: ";
		$p->locomover();
		$p->setPeso(0.5);
		$p->setIdade(1.5);
		$p->setMembros(0);
	echo "O <b>ave</b> se locomove: ";
		$a->locomover();
		$a->setPeso(0.2);
		$a->setIdade(1);
		$a->setMembros(2);
	echo "O <b>canguru</b> se locomove: ";
		$c->locomover();
		$c->usarBolsa();
	echo "O <b>cachorro</b> se locomove: ";
		$k->locomover();
		$k->abanarRabo();
		$k->enterrarOsso();
	echo "O <b>tartaruga</b> se locomove: ";
		$t->locomover();
	echo "O <b>cobra</b> se locomove: ";
		$s->locomover();
	echo "O <b>arara</b> se locomove: ";
		$h->locomover();
	echo "O <b>goldfish</b> se locomove: ";
		$g->locomover();
	?>
</body>
</html>