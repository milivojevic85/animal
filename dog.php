<?php 
require('animal.php');
class Dog extends Animal
{
	protected $type=__CLASS__;
	public function __get($property) {
		if (property_exists($this, $property)) {
			return $this->$property."<br>";
		} else {
			return $property." does not exist<br>";
		}
	}
	public function run() {
		return $this->name." likes to run<br>";
	}
}

$dog = new Dog("Scooby");
echo $dog->type;
echo $dog->greet();
echo $dog->run();

?>