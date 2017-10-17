<?php 

class Personne
{
	private $_name;
	private $_firstname;
	private $_adress;

	public function __construct($name, $firstname, $adress)
	{
		$this->setName($name);
		$this->setFirstname($firstname);
		$this->setAdress($adress);
	}

	public function __destruct()
	{
		echo '<br>'. $this->firstname() .' is dead...';
	}

	public function name(){ return $this->_name; }
	public function setName($name)
	{
		if(is_string($name))
		{
			$this->_name = strtoupper($name);
		}
	}

	public function firstname(){ return $this->_firstname; }
	public function setFirstname($firstname)
	{
		if(is_string($firstname))
		{
			$firstname = strtolower($firstname);
			$this->_firstname = ucfirst($firstname);
		}
	}
	
	public function adress(){ return $this->_adress; }
	private function setAdress($adress)
	{
		if(is_string($adress))
		{
			$this->_adress = $adress;
		}
	}

	public function getPersonne()
	{
		echo $this->firstname().' '.$this->name().' habite au '.$this->adress().'<br>';
	}

	public function setNewAdress($newAdress)
	{
		$this->setAdress($newAdress);
	}
}

 ?>
