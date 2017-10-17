<?php 

require('service.php');

$perso1 = new Personne('baillot', 'sylvain', '54 rue de la conférence');

$perso1->getPersonne();

$perso1->setNewAdress('New');

$perso1->getPersonne();

 ?>
