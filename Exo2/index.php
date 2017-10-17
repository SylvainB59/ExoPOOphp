<?php

function chargerClass($class)
{
	require $class.'.php';
}

spl_autoload_register('chargerClass');



$X = new Ville('Roubaix', 'Nord');

$Y = new Ville('Lille', 'Nord');

$Z = new Ville('Calais', 'Pas de calais');


$X->show();
$Y->show();
$Z->show();

$X->showAttributs();
$Y->showAttributs();
$Z->showAttributs();

echo get_class($X);

?>
