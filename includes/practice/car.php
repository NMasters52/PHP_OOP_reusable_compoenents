<?php 
//Task: Create a class called ElectricCar that extends the Car class. Add a property for batteryCapacity and a method called getBatteryInfo() that returns the battery capacity.

class Car {
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
      $this->make = $make;
      $this->model = $model;
      $this->year = $year;
    
    }

    public function getCarInfo(){
        return "{$this->make} {$this->model} {$this->year}";
    }

    public function __destruct() {
        echo "The {$this->year} {$this->model} is no longer available" . '<br>';
    }
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

//add prop for batteryCapacity

//getBatteryInfo method: return battery capacity

?>