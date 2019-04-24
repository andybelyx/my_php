<?php

class Well {
	public $waterLevel;
	
	public function __construct($waterLevel) {
		$this->waterLevel = $waterLevel;
	}

	public function drawWater() {
		$this->waterLevel -= 10;
	}
}


class WellPlugin {
	public function beforDrawWater($object) {
		if ($object->waterLevel >= 70) {
			$object->bucketIsTrue();
		}else {
			echo "Not enough water!" . PHP_EOL;
			exit;
		}
	}

	public function afterDrawWater($object) {
		if ($object->waterLevel < 25) {
			$object->lightTheLamp();
		}
	}
 }

class WellInterceptor extends Well {
	public $lampIsOn = false;
	public $bucket = false;
	protected $plugin;
	
	public function __construct($waterLevel) {
		parent::__construct($waterLevel);
		$this->plugin = new WellPlugin();
	}
	
	public function bucketIsTrue() {
		$this->bucket = true;
	}

	public function lightTheLamp() {
		$this->lampIsOn = true;
	}
	
	public function waterLevel() {
			$this->plugin->beforDrawWater($this);
	}

	public function drawWater() {
		//2. Запрос отправляется в родительский Well
		$result = parent::drawWater();
		//3. Запрос вернулся
		
		//4. Запрос уходит в плагин
		$this->plugin->afterDrawWater($this);
		//5. Вернулся из плагина
		//6. Вернулся обратно к Юзеру
	}
}

$well = new WellInterceptor(70);

//1. Юзер обращается к Well
function waterLevelFromBucket(Well $well) {
	return $well->waterLevel();
}
function drawWaterFromWell(Well $well) {
	return $well->drawWater();
}

//1. По факту, вместо Well передается WellInterceptor
waterLevelFromBucket($well);
drawWaterFromWell($well);
drawWaterFromWell($well);
drawWaterFromWell($well);


var_dump($well);



















