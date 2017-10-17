<?php

class Ville
{
	public $_name;
	public $_department;

	public function show()
	{
		echo 'La ville '.$this->_name.' est dans le département '.$this->_department.'<br>';
	}
}

$X = new Ville;
$X->_name = 'Roubaix';
$X->_department = 'Nord';

$Y = new Ville;
$Y->_name = 'Calais';
$Y->_department = 'Pas de calais';

$X->show();
$Y->show();

?>
