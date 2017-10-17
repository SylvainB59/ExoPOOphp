<?php

class Ville
{
	private $_name;
	private $_department;

	public function __construct($name, $department)
	{
		$this->setName($name);
		$this->setDepartment($department);
	}

	private function setName($name)
	{
		if (!is_string($name))
		{
			trigger_error('ce n\'est pas un mot', E_USER_WARNING);
			return;
		}
		$this->_name = $name;
	}

	private function setDepartment($department)
	{
		if (!is_string($department))
		{
			trigger_error('ce n\'est pas un mot', E_USER_WARNING);
			return;
		}
		$this->_department = $department;
	}

	public function name()
	{
		return $this->_name;
	}

	public function department()
	{
		return $this->_department;
	}

	public function show()
	{
		echo 'La ville '.$this->name().' est dans le département '.$this->department().'<br>';
	}

	public function showAttributs()
	{
		echo '<br>'.get_class($this).' : <ul>';
		foreach ($this as $attribut => $value)
		{
			echo '<li>'.substr($attribut, 1).' : '.$value.'</li><br>';
		}
		echo '</ul>';
	}
}

?>
