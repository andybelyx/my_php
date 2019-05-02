<?php
class Animals {

	public $type, $class, $squad;

		public function infoType($type) {
			$this->$type = $type;
	}
		public function infoClass($class) {
			$this->$class = $class;
	}

}

class Mammal{

}

class Primate extends Animals{

	public $stirps, $fingerPaw;
		private $wool = true;
		public function itIsPrimate() {
			if ($this->fingerPaw == 5) {
				echo  "   Animal" . PHP_EOL . "Type:".$this->type . PHP_EOL ."Class:". $this->class . PHP_EOL . "It's primate";
			}
			else echo "   Animal" . PHP_EOL . "Type:".$this->type . PHP_EOL ."Class:". $this->class . PHP_EOL . "It is not primate";
		}

}


$monkey = new Primate();

$monkey->type = ('chordata');
$monkey->class = ('mammal');


$monkey->fingerPaw = 5;
$monkey->itIsPrimate();




