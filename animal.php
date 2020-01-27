<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Animal</title>
</head>
<body>	
<?php 

abstract class Animal
{
	// adding class attributes
	public $name; 
	protected $type;
	
	// initializing properties
	public function __construct($name) {
		$this->name = $name;
	}
	// a class method
	public function greet() {
		return "Hello ".$this->name."<br>";
	}
	// an abstract class method
	abstract public function communicate();
	// an abstract class method
	abstract public function run();
}

?>
</body>
</html>