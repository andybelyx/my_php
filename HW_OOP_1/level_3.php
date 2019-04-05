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

	public $fingerPaw;
		
	private $wool = "Yes";

	private $stirps;

	public function __get($wools) {
		if ($wools == "wool"){
			return $this->wool;
		}
		else null;
	}

	public function __set($family, $value){
		if ($family == "stirps") {
			$this->stirps = $value;
		} else null;

	}


			public function itIsPrimate() {
				if (($this->fingerPaw == 5)&&($this->warmBlood == true)&&($this->liveBirths()))  {
					echo  "   Animal" . PHP_EOL . "Type:". $this->infoType($this->type) . PHP_EOL ."Class:". $this->infoClass($this->class) . PHP_EOL . "It's primate" . PHP_EOL . "Family: " . $this->stirps . PHP_EOL . "Wool: ";
					
				}
				else echo "   Animal" . PHP_EOL . "Type:". $this->infoType($this->type) . PHP_EOL ."Class:". $this->infoClass($this->class) . PHP_EOL . "It is not primate".PHP_EOL."Wool: ";
			}
}


$monkey = new Primate();

$monkey->type = ('chordata');
$monkey->class = ('mammal');
$monkey->warmBlood = true;

$monkey->stirps = ('Lemuridae');

$monkey->fingerPaw = 6;
$monkey->itIsPrimate();

print $monkey->wool;






