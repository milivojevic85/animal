<?php 
require('animal.php');
Class Dog extends Animal
{
	public function run() {
		return $this->name." likes to run<br>";
	}
}

$dog = new Dog("Scooby");
echo $dog->greet();
echo $dog->run();

?>