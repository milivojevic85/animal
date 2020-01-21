<?php 
require_once('iAnimal.php');
class Animal implements IAnimal
{
	public $name;
	protected $type;
	public function __construct($name) {
		$this->name = $name;
	}
	public function greet() {
		return "Hello ".$this->name."<br>";
	}
	public function run() {
		return $this->name." likes to run<br>";
	}
	public function communicate() {
		return $this->name." says bow bow<br>";
	}
}
?>