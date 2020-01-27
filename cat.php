<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Cat</title>
</head>
<body>	 

<?php 
require('animal.php');

class Cat extends Animal
{
	protected $type=__CLASS__;
	
	// a magic class method
	public function __get($property) {
		if (property_exists($this, $property)) {
			return $this->$property."<br>";
		} else {
			return $property." does not exist<br>";
		}
	}
	// a class method
	public function run() {
		return $this->name." hates to run<br>";
	}
	// a class method
	public function communicate() {
		return $this->name." says meow<br>";
	}
}

$cat = new Cat("Cuddles");
echo $cat->type; // Cat
echo $cat->greet(); // Hello Cuddles
echo $cat->run(); // Cuddles hates to run
echo $cat->communicate(); // Cuddles says meow

?>
</body>
</html>