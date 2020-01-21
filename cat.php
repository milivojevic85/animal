<?php 
require('animal.php');
class Cat extends Animal
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
		return $this->name." hates to run<br>";
	}
	public function communicate() {
		return $this->name." says meow<br>";
	}
}

$cat = new Cat("Cuddles");
echo $cat->type;
echo $cat->greet();
echo $cat->run();
echo $cat->communicate();

?>