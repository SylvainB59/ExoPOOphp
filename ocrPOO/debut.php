<?php

// class Personnage
// {
	
// //attributs
// 	private $_degats;
// 	private $_experience;
// 	private $_force;

// 	public function __construct($force, $degats)
// 	{
// 		$this->setForce($force);
// 		$this->setDegats($force);

// 	}

// //methodes
// 	public function frapper(Personnage $cible)
// 	{
// 		$cible->_degats += $this->_force;
// 		$this->gagnerExperience();
// 	}

// 	public function gagnerExperience()
// 	{
// 		$this->_experience ++;
// 		// $this->afficherExperience();
// 	}

// 	public function afficherExperience()
// 	{
// 		echo $this->_experience;
// 	}

// // Mutateur chargé de modifier l'attribut $_force.

// 	public function setForce($force)
// 	{
// 		if (!is_int($force)) // S'il ne s'agit pas d'un nombre entier.
// 		{
// 			trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);
// 			return;
// 		}

// 		if ($force > 100) // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
// 		{
// 			trigger_error('La force d\'un personnage ne peut dépasser 100', E_USER_WARNING);
// 			return;
// 		}

// 		$this->_force = $force;
// 	}

// // Mutateur chargé de modifier l'attribut $_degats.

// 	public function setDegats($degats)
// 	{
// 		if (!is_int($degats)) // S'il ne s'agit pas d'un nombre entier.
// 		{
// 			trigger_error('Le niveau de dégâts d\'un personnage doit être un nombre entier', E_USER_WARNING);
// 			return;
// 		}
// 		$this->_degats = $degats;
// 	}  

// // Mutateur chargé de modifier l'attribut $_experience.

// 	public function setExperience($experience)
// 	{
// 		if (!is_int($experience)) // S'il ne s'agit pas d'un nombre entier.
// 		{
// 			trigger_error('L\'expérience d\'un personnage doit être un nombre entier', E_USER_WARNING);
// 			return;
// 		}

// 		if ($experience > 100) // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
// 		{
// 			trigger_error('L\'expérience d\'un personnage ne peut dépasser 100', E_USER_WARNING);
// 			return;
// 		}

// 		$this->_experience = $experience;
// 	}

// //accesseurs(getters)
// 	public function degats()
// 	{
// 		return $this->_degats;
// 	}

// 	public function experience()
// 	{
// 		return $this->_experience;
// 	}

// 	public function force()
// 	{
// 		return $this->_force;
// 	}
// }

// $perso1 = new Personnage(30, 0);
// $perso2 = new Personnage(90, 20);
// $perso1->frapper($perso2);
// echo '<br>';
// $perso2->frapper($perso1);
// echo '<br>';
// var_dump($perso1);
// echo '<br>';

// echo '<ul>Perso1<li>force : '.$perso1->force().'</li><li>dégats : '.$perso1->degats().'</li><li>expérience : '.$perso1->experience().'</li></ul>';
// echo '<ul>Perso2<li>force : '.$perso2->force().'</li><li>dégats : '.$perso2->degats().'</li><li>expérience : '.$perso2->experience().'</li></ul>';


///////////////////////////////////////////////////////////////////


// class Compteur
// {
// 	private static $_compteur=0;

// 	public function __construct()
// 	{
// 		self::$_compteur++;
// 	}

// 	public static function getCompteur()
// 	{
// 		return self::$_compteur;
// 	}
// }

// echo Compteur::getCompteur().'<br>';
// $test1 = new Compteur;
// echo Compteur::getCompteur().'<br>';
// $test2 = new Compteur;
// echo Compteur::getCompteur().'<br>';
// $test3 = new Compteur;
// echo Compteur::getCompteur().'<br>';
// $test4 = new Compteur;
// echo Compteur::getCompteur().'<br>';


///////////////////////////////////////////////////////////////////


class Personnage
{
	private $_id;
	private $_nom;
	private $_forcePerso;
	private $_degats;
	private $_niveau;
	private $_experience;

	public function hydrate(array $donnees)
	{
		foreach($donnees as $key => $value)
		{
			$method = 'set'.ucfirst($key);
			if(method_exists($this, $method))
			{
				$this->$method($value);
			}
		}
	}

// Liste des setters
	public function setId($id)
	{
		$this->_id = (int) $id;
		// $id = (int) $id;

		// if($id > 0)
		// {
		// 	$this->_id = $id;
		// }
	}

	public function setNom($nom)
	{
		if(is_string($nom) && strlen($nom) <= 30)
		{
			$this->_nom = $nom;
		}
	}

	public function setForcePerso($forcePerso)
	{
		$forcePerso = (int) $forcePerso;

		if($forcePerso >= 0 && $forcePerso <= 100)
		{
			$this->_forcePerso = $forcePerso;
		}
	}

	public function setDegats($degats)
	{
		$degats = (int) $degats;

		if($degats >= 0 && $degats <=100)
		{
			$this->_degats = $degats;
		}
	}

	public function setNiveau($niveau)
	{
		$niveau = (int) $niveau;

		if($niveau >= 1)
		{
			$this->_niveau = $niveau;
		}
	}

	public function setExperience($experience)
	{
		$experience = (int) $experience;

		if($experience >= 1 && $experience <= 100)
		{
			$this->_experience = $experience;
		}
	}

// Liste des getters
	public function id(){ return $this->_id; }
	public function nom(){ return $this->_nom; }
	public function forcePerso(){ return $this->_forcePerso; }
	public function degats(){ return $this->_degats; }
	public function niveau(){ return $this->_niveau; }
	public function experience(){ return $this->_experience; }
}

/**************************************************************/

class PersonnageManager
{
	private $_db;

	public function __construct($db)
	{
		$this->setDb($db);
	}



	public function setDb(PDO $db)
	{
		$this->_db = $db;
	}
}

/**************************************************************/


// $bdd = new PDO('mysql:host=localhost;dbname=build-2-moreau;charset=utf8', 'root', 'Neosyl59');
// $req = $bdd->query('SELECT * From projects WHERE id=1')->fetchAll();
// // $Req = $req->fetchAll();
// foreach($req as $valeur)
// {
// echo "<pre>";
// var_dump($valeur);
// echo "</pre>";
// }


$donnees = [
	'id' => 16,
	'nom' => 'Vyk12',
	'forcePerso' => 5,
	'degats' => 55,
	'niveau' => 4,
	'experience' => 20
];

// echo "<pre>";
// var_dump($donnees);
// echo "</pre>";

$perso = new Personnage;

echo "<pre>";
var_dump($perso);
echo "</pre>";

$perso->hydrate($donnees);

// foreach($donnees as $key => $value)
// {
// 	$method = 'set'.ucfirst($key);
// 	echo $method.' : '.$value.'<br>';
// 	if(method_exists($perso, $method))
// 	{
// 		$perso->$method($value);
// 	}
// }

echo "<pre>";
var_dump($perso);
echo "</pre>";


echo '/////////////////////////////////<br>';



class MyDestructableClass 
{
    function __construct()
    {
        print "Construction d'une instance de ".get_class($this)."<br>\n";
        $this->name = get_class($this);
    }

    function __destruct()
    {
        print "Destruction de " . $this->name . "\n";
    }
}

$obj = new MyDestructableClass();



?>
