<?php 

interface Vehicle {
    public function start();
    public function stop();
};

abstract class Vehicle1 {
 abstract public function getFuelType();
}
class Car extends Vehicle1 {
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
      $this->make = $make;
      $this->model = $model;
      $this->year = $year;
    
    }

    public function getFuelType() {
        echo "This vehicle take gas";
    }

    public function getCarInfo(){
        return "{$this->make} {$this->model} {$this->year}";
    }

    public function __destruct() {
        echo "The {$this->year} {$this->model} is no longer available" . '<br>';
    }

    // public function start() {
    //     echo "The {$this->model} has started.<br>";
    // }

    // public function stop() {
    // echo "Car has stopped.<br>";
    // }
}


class ElectricCar extends Car {
    public $batteryCapacity;

    public function __construct($make, $model, $year, $batteryCapacity) {
        parent::__construct($make, $model, $year);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function getBatteryInfo() {
        return "The battery capacity is at: {$this->batteryCapacity}";
    }
}

?>