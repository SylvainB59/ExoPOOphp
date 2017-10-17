<?php

require('service.php');

$myForm = new Form('POST');

$myForm->setText('pseudo');
$myForm->setText('nom');
$myForm->setText('prenom');
$myForm->setSubmit('envoyerForm', 'Envoyer');

// echo '<pre>';
// var_dump($myForm);
// echo '<pre>';
echo $myForm->getForm();

?>
