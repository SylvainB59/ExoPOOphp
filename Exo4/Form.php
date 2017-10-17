<?php

// class Form
// {
// 	private $_form;
// 	private $_text;
// 	private $_submit;

// 	public function __construct($method)
// 	{
// 		$this->setForm($method);
// 		// $this->setText($name);
// 	}

// 	public function setForm($method)
// 	{
// 		$this->_form = '<form action="" method="'.$method.'">';
// 	}

// 	public function getForm()
// 	{
// 		return $this->_form .= $this->text(). $this->submit(). "\n".'</form>';
// 	}

// 	public function text() { return $this->_text; }
// 	public function setText($name)
// 	{
// 		$this->_text .= "\n\t".'<p>'."\n\t\t".'<label for="'.$name.'">Votre '.$name.'</label><br>'."\n\t\t".'<input type="text" name="'.$name.'" id="'.$name.'" placeholder="Votre '.$name.'">'."\n\t".'</p>';
// 	}

// 	public function submit() { return $this->_submit; }
// 	public function setSubmit($name, $value)
// 	{
// 		$this->_submit = "\n\t".'<input type="submit" name="'.$name.'" value="'.$value.'">';
// 	}

// }


class Form
{
	private $_form;
	private $_text;
	private $_submit;

	public function __construct($method)
	{
		$this->setForm($method);
		// $this->setText($name);
	}

	public function getForm()
	{
		return $this->form() . $this->text() . $this->submit() . "\n".'</form>';
	}

	public function form() { return $this->_form; }
	public function setForm($method)
	{
		$this->_form = '<form action="" method="'.$method.'">';
	}

	public function text() { return $this->_text; }
	public function setText($name)
	{
		$this->_text .= '
		<p>
			<label for="'.$name.'">Votre '.$name.'</label><br>
			<input type="text" name="'.$name.'" id="'.$name.'" placeholder="Votre '.$name.'">
		</p>';
	}

	public function submit() { return $this->_submit; }
	public function setSubmit($name, $value)
	{
		$this->_submit = '
		<input type="submit" name="'.$name.'" value="'.$value.'">';
	}
}

?>
