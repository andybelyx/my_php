<?php

class Car {
    protected $doors;

    public function __construct($doors){
        $this->doors = $doors;
    }

}

class  Door {

}

class CarFactory {
    public function create() {
        $doorFactory = new DoorFactory();
        $doors = $doorFactory->create();
        return new Car($doors);
    }
}

class DoorFactory {
    public function create() {
        return new Door();
    }
}


$carFactory = new CarFactory();
$car = $carFactory->create();
print_r($car);
