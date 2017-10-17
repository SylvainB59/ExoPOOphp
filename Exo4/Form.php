<?php

class Form
{
	private $_newInput;
	private $_form;

	public function  __construct()
	{
		echo $this->setForm();
	}

	public function setText()
	{
		$this->_newInput = '<p><label for=""></label><br><input type="text" name="" id=""></p>';
	}

	public function setSubmit()
	{
		$this->_newInput = '<input type="submit" name="" value="">';
	}

	public function setForm()
	{
		$this->_form = '<form action="" method="post">'.$this->setNewInput.'</form>';
	}

	public function setNewInput()
	{
		if(!empty($this->_newInput))
		{
			return $this->_newInput;
		}
		else
		{
			return '';
		}
	}

	public function form()
	{
		return $_form;
	}

}

// echo '
// <form action="" method=""></form>

// <p><label for="pseudo"></label><br><input type="text" name="" id=""></p>

// <input type="submit" name="" value="">
// ';

?>
