<?php
abstract class RideOn {

	abstract protected function drive();

	public function ride() {
		print "OMG, Yes... I ride... ". $this->drive() . PHP_EOL;
	}
}

class Motorcycle extends RideOn {
	public $suzukiGsxR1000;

	public function drive() {
		return $this->suzukiGsxR1000;
	}
}

/* Rule "Single responsibility" and Rule "Open-closed" */
class Paint extends Motorcycle {
	public $color;

	public function toPaint() {
		print "My Bike is " . $this->color . PHP_EOL;
	}
} 
/* Rule "Single responsibility" and Rule "Open-closed"*/
class Repairs extends Motorcycle {

	public function toFix() {
		print "Bike is work!".PHP_EOL;
	}

	public function changeOil() {
		print "Oil has changed!".PHP_EOL;
	}
}
/* Rule " Liskov substitution "*/
class NewColor extends Paint {
	public $newColor;
	public function zebraStyle() {
		print "My Bike has new color " . $this->color . " and " . $this->newColor . " !". PHP_EOL;
}

}

$motoPaint = new Paint();
$motoPaint->color = ('Black');
$motoPaint->toPaint();

$motoRepair = new Repairs();
$motoRepair->toFix();
$motoRepair->changeOil();

$motoRepair->suzukiGsxR1000 = ("Suzuki - It's very fast Bike!!");
$motoRepair->ride();

$newMotoColor = new NewColor();
$newMotoColor->color = ('Black');
$newMotoColor->newColor = ('Yellow');
$newMotoColor->zebraStyle();




