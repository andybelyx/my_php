<?php
abstract class Car {
		
		function __construct($fuel="", $power=0, $gear="") {
		$this->fuel = $fuel;
		$this->power = $power;
		$this->gear = $gear;
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
}

abstract class Info extends Gear {

		function __toString()  {
		$info = "Car: " . get_class($this) . PHP_EOL . "Color: " . "{$this->getColor()}" . PHP_EOL;
		$info .= "It's fuel consists of: {$this->fuel}" . PHP_EOL;
		$info .= "Engine power is " . "({$this->power})hp" . PHP_EOL;
		$info .= "Gear: " . "{$this->gear}. " . "Has " . "({$this->getGearCount()})" . " gears" . PHP_EOL;
		$info .= str_repeat("_",30).PHP_EOL;
		return $info;
	}
}

class Priora extends Info {

}

class Prius extends Info {

}

$engine_2_0Turbo = 200;
$engine_W12_6l = 450;
$nos = 150;


$priora = new Priora("Propan, Gas", 104, "Mechanic");
$priora->setColor('Eggplant');
$priora->tuningEngine($engine_W12_6l);
$priora($nos);
$priora->setGearCount(6);
$priora->tuningGear('Automat');
echo $priora;

$prius = new Prius("Gas, Electro", 121, "Automat");
$prius->setColor('White');
$prius->tuningEngine($engine_2_0Turbo);
$prius($nos);
$prius->setGearCount(7);
$prius->tuningGear('Tiptronic');
echo $prius;

