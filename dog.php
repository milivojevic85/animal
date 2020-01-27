<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Dog</title>
</head>
<body>	
 
<?php 
require('animal.php');

class Dog extends Animal
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
		return $this->name." likes to run<br>";
	}
	// a class method
	public function communicate() {
		return $this->name." says bow bow<br>";
	}
}

$dog = new Dog("Scooby");
echo $dog->type; // Dog
echo $dog->greet(); // Hello Scooby
echo $dog->run(); // Scooby likes to run
echo $dog->communicate(); // Scooby says bow bow

?>
</body>
</html>