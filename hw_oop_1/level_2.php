<?php
class Animals {

	public $type, $class, $squad;

		public function infoType($type) {
			return $this->$type = $type;
	}
		public function infoClass($class) {
			return $this->$class = $class;
	}
}

class Mammal extends Animals{
	private $liveBirth = true;

	public $milkFood, $warmBlood;

		public function liveBirths(){
			if ($this->liveBirth == true)
				return $this->liveBirth;
	}
}

class Primate extends Mammal{

	public $stirps, $fingerPaw;
		
	private $wool = true;
			public function itIsPrimate() {
				if (($this->fingerPaw == 5)&&($this->warmBlood == true)&&($this->liveBirths()))  {
					echo  "   Animal" . PHP_EOL . "Type:". $this->infoType($this->type) . PHP_EOL ."Class:". $this->infoClass($this->class) . PHP_EOL . "It's primate";
				}
				else echo "   Animal" . PHP_EOL . "Type:". $this->infoType($this->type) . PHP_EOL ."Class:". $this->infoClass($this->class) . PHP_EOL . "It is not primate";
			}
}


$monkey = new Primate();

$monkey->type = ('chordata');
$monkey->class = ('mammal');
$monkey->warmBlood = true;

$monkey->fingerPaw = 5;
$monkey->itIsPrimate();




