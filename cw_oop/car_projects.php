<?php
abstract class Car {
		function __construct($fuel="", $power=0, $gear="", $bodyStyle="") {
		$this->fuel = $fuel;
		$this->power = $power;
		$this->gear = $gear;
		$this->bodyStyle = $bodyStyle;	
	}
}

class Engine extends Car {
	public function __invoke($nos) {
		$this->power += $nos;
		return $this->power;
	}
	public function tuningEngine($newEngine) {
		$this->power = $newEngine;
		return $this->power;
	}
}

class Gear extends Engine {
private $wheelDrive = "FWD";

	public function tuningGear($newGear) {
		$this->gear = $newGear;
		return $this->gear;
	}

	public function __call($name, $arguments) {
        $var="gearType";
        	if (strstr($name, "Count")) {
        		$var="gearCount";
        	}
	        if($arguments) {
            	$this->$var = $arguments[0];
            	return true;
        	} else {
            	return $this->$var;
        	}
    }

	public function __get($wheelDrives) {
		if ($wheelDrives == "wheelDrive") {
			return $this->wheelDrive;
		}
	}

	

}

abstract class Info extends Gear {	
		function __toString()  {
		$info = "Car: " . get_class($this) . PHP_EOL . "Color: " . "{$this->getColor()}" . PHP_EOL
		 . "Body style: " . "{$this->bodyStyle}" . PHP_EOL
		 . "Type of drive: " . "{$this->wheelDrive}" . PHP_EOL
		 . "It's fuel consists of: " . "{$this->fuel}" . PHP_EOL
		 . "Engine power is " . "({$this->power})hp" . PHP_EOL
		 . "Gear: " . "{$this->gear}. " . "Has " . "({$this->getGearCount()})" . " gears" . PHP_EOL
		 . str_repeat("_",30).PHP_EOL;
		return $info;
	}
}

class Lada_Priora extends Info {

}

class Toyota_Prius extends Info {

}

class BMW_M5 extends Info {

}

$engine_2_0Turbo = 200;
$engine_W12_6l = 450;
$engine_V8_4_4Bi_Turbo = 600;
$nos = 150;


$priora = new Lada_Priora("Propan, Gas", 104, "Mechanic", "Sedan");
$priora->setColor('Eggplant');
$priora->tuningEngine($engine_W12_6l);
$priora($nos);
$priora->setGearCount(6);
$priora->tuningGear('Automat');
echo $priora;

$prius = new Toyota_Prius("Gas, Electro", 121, "Automat", "Hatchback");
$prius->setColor('White');
$prius->tuningEngine($engine_2_0Turbo);
$prius($nos);
$prius->setGearCount(7);
$prius->tuningGear('Tiptronic');
echo $prius;

$bmwM5 = new BMW_M5("Gas", 340, "Automat", "Sedan");
$bmwM5->setColor('Black');
$bmwM5->wheelDrive = ("AWD");
$bmwM5->tuningEngine($engine_V8_4_4Bi_Turbo);
$bmwM5($nos);
$bmwM5->setGearCount(7);
echo $bmwM5;

