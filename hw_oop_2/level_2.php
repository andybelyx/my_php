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

class Scooter extends RideOn {
	public $hondaDio;

	public function drive() {
		return $this->hondaDio;
	}
}

class QuadBike extends RideOn {
	public $hondaTRX450R;

	public function drive() {
		return $this->hondaTRX450R;
	}
}

$motorcycle = new Motorcycle();
$motorcycle->suzukiGsxR1000 = ("Suzuki - It's very fast Bike!!");
$motorcycle->ride();

$scooter = new Scooter();
$scooter->hondaDio = ("But it's very slow :( DioDio");
$scooter->ride();

$quadBike = new QuadBike();
$quadBike->hondaTRX450R = ("No, I'm flying TRX....");
$quadBike->ride();

